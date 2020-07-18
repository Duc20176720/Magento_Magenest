<?php
namespace Simple\Slider\Model\ResourceModel;
class Slider extends
    \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('magenest_simpleslilder_slider',
            'slider_id');
    } }
