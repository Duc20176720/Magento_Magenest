<?php

namespace Magenest\Staff\Controller\Adminhtml\Staff;


use Magenest\Staff\Controller\Adminhtml\Staff;
use Magenest\Staff\Model\ResourceModel\Staff\CollectionFactory;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magenest\Staff\Model\StaffFactory;


class Edit extends Staff
{

    public function __construct(Action\Context $context,
                                StaffFactory $staffFactory,
                                CollectionFactory $staffCollectionFactory,
                                PageFactory $pageFactory)
    {

        $this->_staffFactory = $staffFactory;
        parent::__construct($context, $staffFactory, $staffCollectionFactory, $pageFactory);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        if (isset($params['nick_name'])) {
            $data = $params;

            try {
                $model = $this->_staffFactory->create();
                $model->setData($data);
                $model->save();
                $this->messageManager->addSuccessMessage(__("You edit successfully"));
                $this->_redirect('staff/staff/index');
            } catch (\Exception $exception) {
                $this->messageManager->addSuccessMessage(__($exception->getMessage()));
                $this->_redirect('staff/staff/index');
            }
        } else {
            $resultPage = $this->_resultPage->create();
            $resultPage->getConfig()->getTitle()->prepend(__("Edit Staff"));
            $resultPage->getConfig()->getTitle()->set(__('Staff'));

            return $resultPage;
        }
    }

}

