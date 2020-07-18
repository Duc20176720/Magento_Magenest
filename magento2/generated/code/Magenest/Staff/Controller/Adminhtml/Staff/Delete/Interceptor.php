<?php
namespace Magenest\Staff\Controller\Adminhtml\Staff\Delete;

/**
 * Interceptor class for @see \Magenest\Staff\Controller\Adminhtml\Staff\Delete
 */
class Interceptor extends \Magenest\Staff\Controller\Adminhtml\Staff\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magenest\Staff\Model\StaffFactory $staffFactory)
    {
        $this->___init();
        parent::__construct($context, $staffFactory);
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
