<?php

namespace Simple\Slider\Controller\Adminhtml\Banner;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Add extends \Magento\Backend\App\Action
{
    protected $_pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__('Add new')));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Simple_Slider::magenest_simpleslider_banner');
    }
}
