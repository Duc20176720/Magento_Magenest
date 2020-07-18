<?php

namespace Simple\Slider\Controller\Adminhtml\Slider;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Action
{
    protected $_resultPage;

    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
        $this->_resultPage = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->_resultPage->create();
        return $result;
    }
}


