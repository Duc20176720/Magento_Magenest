<?php

namespace Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent;


use Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent;
use Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent\CollectionFactory;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magenest\WeddingEvent\Model\WeddingEventFactory;


class Edit extends WeddingEvent
{

    public function __construct(Action\Context $context,
                                WeddingEventFactory $weddingEventFactory,
                                CollectionFactory $weddingEventCollectionFactory,
                                PageFactory $pageFactory)
    {

        $this->_weddingEventFactory = $weddingEventFactory;
        parent::__construct($context, $weddingEventFactory, $weddingEventCollectionFactory, $pageFactory);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        if (isset($params['title'])) {
            $data = $params;

            try {
                $model = $this->_weddingEventFactory->create();
                $model->setData($data);
                $model->save();
                $this->messageManager->addSuccessMessage(__("You edit successfully"));
                $this->_redirect('weddingevent/weddingevent/index');
            } catch (\Exception $exception) {
                $this->messageManager->addSuccessMessage(__($exception->getMessage()));
                $this->_redirect('weddingevent/weddingevent/index');
            }
        } else {
            $resultPage = $this->_resultPage->create();
            $resultPage->getConfig()->getTitle()->prepend(__("Edit Wedding Event"));
            $resultPage->getConfig()->getTitle()->set(__('Wedding Event'));

            return $resultPage;
        }
    }

}

