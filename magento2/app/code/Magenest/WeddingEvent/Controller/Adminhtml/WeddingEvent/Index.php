<?php
namespace Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent;

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
        $resultPage->getConfig()->getTitle()->prepend((__('Table Wedding Event')));

        return $resultPage;

    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_WeddingEvent::magenest_wedding_event');
    }

}
