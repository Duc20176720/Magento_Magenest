<?php


namespace Magenest\Staff\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Staff extends AbstractDb
{
    public function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('magenest_staff','id');
    }
}
