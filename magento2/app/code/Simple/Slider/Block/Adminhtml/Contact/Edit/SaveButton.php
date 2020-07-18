<?php
namespace Simple\Slider\Block\Adminhtml\Contact\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton  implements ButtonProviderInterface
{
    protected $urlBuilder;
    protected $registry;


    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry
    ) {
        $this->urlBuilder = $context->getUrlBuilder();
        $this->registry = $registry;
    }
    public function getUrl($route = '', $params = [])
    {
        return $this->urlBuilder->getUrl($route, $params);
    }

    public function getButtonData()
    {
        return [
            'label' => __('Save Contact'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'on_click' => sprintf("location.href= '%s';", $this->getSaveUrl()),
            'sort_order' => 90
        ];
    }

    public function getSaveUrl()
    {
        return $this->getUrl('slider/slider/save', []) ;
    }
}
