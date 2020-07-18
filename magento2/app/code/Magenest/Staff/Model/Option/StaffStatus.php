<?php


namespace Magenest\Staff\Model\Option;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class StaffStatus extends AbstractSource
{
    public function getAllOptions()
    {
        $option=[

            ['label'=>'pending' ,'value'=>1],
            ['label'=>'approved', 'value'=>2]
        ];
        // TODO: Implement getAllOptions() method.
        return $option;
    }
}
