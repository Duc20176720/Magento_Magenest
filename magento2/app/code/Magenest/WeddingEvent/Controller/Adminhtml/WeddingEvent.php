<?php
namespace Magenest\WeddingEvent\Controller\Adminhtml;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magenest\WeddingEvent\Model\WeddingEventFactory;
use Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent\CollectionFactory;

class WeddingEvent extends Action
{
    public $_resultPage;
    public $_weddingEventFactory;
    public $_weddingEventCollectionFactory;

    public function __construct(Action\Context $context,
                                WeddingEventFactory $weddingEventFactory,
                                CollectionFactory $weddingEventCollectionFactory,
                                PageFactory $pageFactory)
    {
        $this->_weddingEventFactory = $weddingEventFactory;
        $this->_weddingEventCollectionFactory = $weddingEventCollectionFactory;
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