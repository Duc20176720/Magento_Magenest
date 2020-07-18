<?php
namespace Simple\Slider\Model\ResourceModel;
class Banner extends
    \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('magenest_simpleslider_banner',
            'banner_id');
    } }
