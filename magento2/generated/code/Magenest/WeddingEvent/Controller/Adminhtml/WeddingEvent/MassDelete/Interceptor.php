<?php
namespace Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent\MassDelete;

/**
 * Interceptor class for @see \Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent\MassDelete
 */
class Interceptor extends \Magenest\WeddingEvent\Controller\Adminhtml\WeddingEvent\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory);
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
