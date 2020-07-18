<?php

namespace Simple\Slider\Controller\Adminhtml\Slider;

use Magento\Backend\App\Action;
use Simple\Slider\Model\SliderFactory;

class Delete extends Action
{
    protected $_sliderModel;

    public function __construct(Action\Context $context, SliderFactory $sliderFactory)
    {
        $this->_sliderModel = $sliderFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('slider_id');
        $slider = $this->_sliderModel->create()->load($id);
        try {
            $slider->delete();
            $this->messageManager->addSuccessMessage('Deleted successfully!');
            return $resultRedirect->setPath('*/*/');
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage($exception);
            return $resultRedirect->setPath('*/*/');
        }
    }
}
