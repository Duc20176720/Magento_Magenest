<?php
namespace Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent;

/**
 * Interceptor class for @see \Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent
 */
class Interceptor extends \Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magenest\WeddingEvent\Model\WeddingEventFactory $weddingEventFactory, \Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent\CollectionFactory $weddingEventCollectionFactory, \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($context, $weddingEventFactory, $weddingEventCollectionFactory, $pageFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
