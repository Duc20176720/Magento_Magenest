<?php
namespace Magenest\Staff\Controller\Adminhtml\Staff;

use Magenest\Staff\Controller\Adminhtml\Staff;
use Magenest\Staff\Model\ResourceModel\Staff\CollectionFactory;
use Magenest\Staff\Model\StaffFactory;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Add extends Staff
{
    public function __construct(Action\Context $context,
                                StaffFactory $staffFactory,
                                CollectionFactory $staffCollectionFactory,
                                PageFactory $pageFactory)
    {

        $this->_staffFactory = $staffFactory;
        parent::__construct($context, $staffFactory, $staffCollectionFactory, $pageFactory);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();

        if (isset($params['nick_name'])) {

            try {
                $model = $this->_staffFactory->create();

                $this->_eventManager->dispatch('staff_save_before',['mp_text'=>$params]);

                $model->setData($params);
                $model->save();
                $this->messageManager->addSuccessMessage(__("You added successfully"));
                $this->_redirect('staff/staff/index');
            } catch (\Exception $exception) {
                $this->messageManager->addErrorMessage(__($exception->getMessage()));
                $this->_redirect('staff/staff/index');
            }
        } else {
            $resultPage = $this->_resultPage->create();
            $resultPage->getConfig()->getTitle()->prepend(__('Add Staff'));
            $resultPage->getConfig()->getTitle()->set(__('Staff'));

            return $resultPage;
        }

    }


}
