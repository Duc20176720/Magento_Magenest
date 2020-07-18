<?php


namespace Magenest\Test\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Address extends AbstractDb
{
    public function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('magenest_test_address','id');
    }
}