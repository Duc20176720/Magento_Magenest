<?php


namespace Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Magenest\WeddingEvent\Model\WeddingEvent', 'Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent');
//        parent::_construct(); // TODO: Change the autogenerated stub
    }
}
