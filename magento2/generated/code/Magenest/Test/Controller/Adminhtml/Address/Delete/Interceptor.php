<?php
namespace Magenest\Test\Controller\Adminhtml\Address\Delete;

/**
 * Interceptor class for @see \Magenest\Test\Controller\Adminhtml\Address\Delete
 */
class Interceptor extends \Magenest\Test\Controller\Adminhtml\Address\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magenest\Test\Model\AddressFactory $addressFactory)
    {
        $this->___init();
        parent::__construct($context, $addressFactory);
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
