<?php

namespace Simple\Slider\Controller\Adminhtml\Banner;

use Magento\Backend\App\Action;
use Simple\Slider\Model\BannerFactory;

class Delete extends Action
{
    protected $_bannerModel;

    public function __construct(Action\Context $context, BannerFactory $bannerFactory)
    {
        $this->_bannerModel = $bannerFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('banner_id');
        $banner = $this->_bannerModel->create()->load($id);
        try {
            $banner->delete();
            $this->messageManager->addSuccessMessage('Deleted successfully!');
            return $resultRedirect->setPath('*/*/');
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage($exception);
            return $resultRedirect->setPath('*/*/');
        }
    }
}
