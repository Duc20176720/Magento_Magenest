<?php
namespace Magenest\Test\Controller\Adminhtml;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magenest\Test\Model\AddressFactory;
use Magenest\Test\Model\ResourceModel\Address\CollectionFactory;

class Address extends Action
{
    public $_resultPage;
    public $_addressFactory;
    public $_addressCollectionFactory;

    public function __construct(Action\Context $context,
                                AddressFactory $addressFactory,
                                CollectionFactory $addressCollectionFactory,
                                PageFactory $pageFactory)
    {
        $this->_addressFactory = $addressFactory;
        $this->_addressCollectionFactory = $addressCollectionFactory;
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
