<?php


namespace Magenest\WeddingEvent\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class WeddingEvent extends AbstractDb
{
    public function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('magenest_wedding_event','id');
    }
}
