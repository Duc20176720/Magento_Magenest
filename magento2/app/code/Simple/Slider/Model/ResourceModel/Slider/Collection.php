<?php
namespace Simple\Slider\Model\ResourceModel\Slider;
/**
 * Subscription Collection
 */
class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\
    AbstractCollection {
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct() {
        $this->_init('Simple\Slider\Model\Slider',
            'Simple\Slider\Model\ResourceModel\Slider');
    }
}
