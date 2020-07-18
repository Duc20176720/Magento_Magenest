<?php
namespace Simple\Slider\Model\ResourceModel\Banner;
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
        $this->_init('Simple\Slider\Model\Banner',
            'Simple\Slider\Model\ResourceModel\Banner');
    }
}
