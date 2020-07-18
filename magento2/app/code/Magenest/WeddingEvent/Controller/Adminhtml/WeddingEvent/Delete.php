<?php

namespace Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent;


use Magento\Backend\App\Action;
use Magenest\WeddingEvent\Model\WeddingEventFactory;

class Delete extends Action
{
    protected $_weddingEventModel;

    public function __construct(Action\Context $context, WeddingEventFactory $weddingEventFactory)
    {
        $this->_weddingEventModel = $weddingEventFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('id');
        $weddingEvent = $this->_weddingEventModel->create()->load($id);
        try {
            $weddingEvent->delete();
            $this->messageManager->addSuccessMessage('Deleted successfully!');
            return $resultRedirect->setPath('*/*/');
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage($exception);
            return $resultRedirect->setPath('*/*/');
        }
    }
}
