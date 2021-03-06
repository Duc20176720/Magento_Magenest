<?php
namespace Magenest\Staff\Controller\Adminhtml;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magenest\Staff\Model\StaffFactory;
use Magenest\Staff\Model\ResourceModel\Staff\CollectionFactory;

class Staff extends Action
{
    public $_resultPage;
    public $_staffFactory;
    public $_staffCollectionFactory;

    public function __construct(Action\Context $context,
                                StaffFactory $staffFactory,
                                CollectionFactory $staffCollectionFactory,
                                PageFactory $pageFactory)
    {
        $this->_staffFactory = $staffFactory;
        $this->_staffCollectionFactory = $staffCollectionFactory;
        $this->_resultPage = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }

    public function _isAllowed()
    {
        return parent::_isAllowed(); // TODO: Change the autogenerated stub
    }


}
