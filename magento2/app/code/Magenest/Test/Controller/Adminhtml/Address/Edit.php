<?php

namespace Magenest\Test\Controller\Adminhtml\Address;


use Magenest\Test\Controller\Adminhtml\Address;
use Magenest\Test\Model\ResourceModel\Address\CollectionFactory;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magenest\Test\Model\AddressFactory;


class Edit extends Address
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
            $data = $params;

            try {
                $model = $this->_addressFactory->create();
                $model->setData($data);
                $model->save();
                $this->messageManager->addSuccessMessage(__("You edit successfully"));
                $this->_redirect('test/address/index');
            } catch (\Exception $exception) {
                $this->messageManager->addSuccessMessage(__($exception->getMessage()));
                $this->_redirect('test/address/index');
            }
        } else {
            $resultPage = $this->_resultPage->create();
            $resultPage->getConfig()->getTitle()->prepend(__("Edit Address"));
            $resultPage->getConfig()->getTitle()->set(__('Address'));

            return $resultPage;
        }
    }

}

