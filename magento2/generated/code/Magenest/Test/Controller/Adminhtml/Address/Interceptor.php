<?php
namespace Magenest\Test\Controller\Adminhtml\Address;

/**
 * Interceptor class for @see \Magenest\Test\Controller\Adminhtml\Address
 */
class Interceptor extends \Magenest\Test\Controller\Adminhtml\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magenest\Test\Model\AddressFactory $addressFactory, \Magenest\Test\Model\ResourceModel\Address\CollectionFactory $addressCollectionFactory, \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($context, $addressFactory, $addressCollectionFactory, $pageFactory);
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
