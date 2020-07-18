<?php
namespace Simple\Slider\Controller\Adminhtml\Banner\Delete;

/**
 * Interceptor class for @see \Simple\Slider\Controller\Adminhtml\Banner\Delete
 */
class Interceptor extends \Simple\Slider\Controller\Adminhtml\Banner\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Simple\Slider\Model\BannerFactory $bannerFactory)
    {
        $this->___init();
        parent::__construct($context, $bannerFactory);
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
