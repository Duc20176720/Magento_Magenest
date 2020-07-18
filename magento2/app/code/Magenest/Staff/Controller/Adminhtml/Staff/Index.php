<?php
namespace Magenest\Staff\Controller\Adminhtml\Staff;

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
        $resultPage->getConfig()->getTitle()->prepend((__('Table Staff')));

        return $resultPage;

    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Staff::magenest_staff_staff');
    }

}
