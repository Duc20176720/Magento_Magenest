<?php
namespace Magenest\Test\Controller\Adminhtml\Address;

use Magenest\Test\Controller\Adminhtml\Address;
use Magenest\Test\Model\ResourceModel\Address\CollectionFactory;
use Magenest\Test\Model\AddressFactory;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Add extends Address
{
    public function __construct(Action\Context $context,
                                AddressFactory $addressFactory,
                                CollectionFactory $addressCollectionFactory,
                                PageFactory $pageFactory)
    {

        $this->_addressFactory = $addressFactory;
        parent::__construct($context, $addressFactory, $addressCollectionFactory, $pageFactory);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();

        if (isset($params['street'])) {

            try {
                $model = $this->_addressFactory->create();

                $this->_eventManager->dispatch('address_save_before',['mp_text'=>$params]);

                $model->setData($params);
                $model->save();
                $this->messageManager->addSuccessMessage(__("You added successfully"));
                $this->_redirect('test/address/index');
            } catch (\Exception $exception) {
                $this->messageManager->addErrorMessage(__($exception->getMessage()));
                $this->_redirect('test/address/index');
            }
        } else {
            $resultPage = $this->_resultPage->create();
            $resultPage->getConfig()->getTitle()->prepend(__('Add Address'));
            $resultPage->getConfig()->getTitle()->set(__('Address'));

            return $resultPage;
        }

    }


}
