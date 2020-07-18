<?php

namespace Magenest\Staff\Controller\Adminhtml\Staff;


use Magento\Backend\App\Action;
use Magenest\Staff\Model\StaffFactory;

class Delete extends Action
{
    protected $_staffModel;

    public function __construct(Action\Context $context, StaffFactory $staffFactory)
    {
        $this->_staffModel = $staffFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('id');
        $staff = $this->_staffModel->create()->load($id);
        try {
            $staff->delete();
            $this->messageManager->addSuccessMessage('Deleted successfully!');
            return $resultRedirect->setPath('*/*/');
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage($exception);
            return $resultRedirect->setPath('*/*/');
        }
    }
}
