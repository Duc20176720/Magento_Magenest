<?php


namespace Magenest\Staff\Model\Option;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class StaffType extends AbstractSource
{
    public function getAllOptions()
    {
        $option=[
            ['label'=>'Lv1' , 'value'=>1],
            ['label'=>"Lv2" ,'value'=>2],
            ['label'=>'Not Staff', 'value'=>0]
        ];
        // TODO: Implement getAllOptions() method.
        return $option;
    }
}
