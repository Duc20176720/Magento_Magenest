<?php
namespace MSP\TwoFactorAuth\Controller\Adminhtml\Authy\Verify;

/**
 * Interceptor class for @see \MSP\TwoFactorAuth\Controller\Adminhtml\Authy\Verify
 */
class Interceptor extends \MSP\TwoFactorAuth\Controller\Adminhtml\Authy\Verify implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Auth\Session $session, \MSP\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\Framework\Registry $registry, \MSP\TwoFactorAuth\Api\UserConfigManagerInterface $userConfigManager, \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($context, $session, $tfa, $registry, $userConfigManager, $pageFactory);
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
