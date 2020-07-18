<?php

namespace Magenest\Test\Controller\Adminhtml\Address;


use Magento\Backend\App\Action;
use Magenest\Test\Model\AddressFactory;

class Delete extends Action
{
    protected $_addressModel;

    public function __construct(Action\Context $context, AddressFactory $addressFactory)
    {
        $this->_addressModel = $addressFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('id');
        $address = $this->_addressModel->create()->load($id);
        try {
            $address->delete();
            $this->messageManager->addSuccessMessage('Deleted successfully!');
            return $resultRedirect->setPath('*/*/');
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage($exception);
            return $resultRedirect->setPath('*/*/');
        }
    }
}
