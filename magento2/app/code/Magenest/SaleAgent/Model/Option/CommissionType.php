<?php


namespace Magenest\SaleAgent\Model\Option;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class CommissionType extends AbstractSource
{
    public function getAllOptions()
    {
        $option=[
            ['label'=>'Fixed' , 'value'=>1],
            ['label'=>'Percent' ,'value'=>0]
        ];
        // TODO: Implement getAllOptions() method.
        return $option;
    }
}
