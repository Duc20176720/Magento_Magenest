<?php
namespace Simple\Slider\Controller\Adminhtml\Slider;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $_pageFactory;
    public function __construct(Context $context,PageFactory $pageFactory)
    {
        $this->_pageFactory=$pageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__('Table Slider')));

        return $resultPage;

    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Simple_Slider::magenest_simpleslider_slider');
    }

}
