<?php
namespace Magenest\Staff\Controller\Adminhtml\Staff;

/**
 * Interceptor class for @see \Magenest\Staff\Controller\Adminhtml\Staff
 */
class Interceptor extends \Magenest\Staff\Controller\Adminhtml\Staff implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magenest\Staff\Model\StaffFactory $staffFactory, \Magenest\Staff\Model\ResourceModel\Staff\CollectionFactory $staffCollectionFactory, \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($context, $staffFactory, $staffCollectionFactory, $pageFactory);
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
