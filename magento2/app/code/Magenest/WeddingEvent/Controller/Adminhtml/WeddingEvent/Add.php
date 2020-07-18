<?php
namespace Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent;

use Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent;
use Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent\CollectionFactory;
use Magenest\WeddingEvent\Model\WeddingEventFactory;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Add extends WeddingEvent
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

            try {
                $model = $this->_weddingEventFactory->create();

                //$this->_eventManager->dispatch('address_save_before',['mp_text'=>$params]);

                $model->setData($params);
                $model->save();
                $this->messageManager->addSuccessMessage(__("You added successfully"));
                $this->_redirect('weddingevent/weddingevent/index');
            } catch (\Exception $exception) {
                $this->messageManager->addErrorMessage(__($exception->getMessage()));
                $this->_redirect('weddingevent/weddingevent/index');
            }
        } else {
            $resultPage = $this->_resultPage->create();
            $resultPage->getConfig()->getTitle()->prepend(__('Add Wedding Event'));
            $resultPage->getConfig()->getTitle()->set(__('Wedding Event'));

            return $resultPage;
        }

    }


}
