<?php

namespace Simple\Slider\Model\SliderId;

use Simple\Slider\Model\ResourceModel\Slider\CollectionFactory;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class select extends AbstractSource
{
    protected $_collectionFactory;
    protected $dataOptions;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->_collectionFactory = $collectionFactory;
        $this->dataOptions = $this->_collectionFactory->create()->getData();
    }

    public function getAllOptions()
    {
        $dataOptions = $this->dataOptions;

        $this->_options = [];
        foreach ($dataOptions as $dataOption) {
            $data = ['label' => $dataOption['name'], 'value' => $dataOption['slider_id']];
            array_push($this->_options, $data);
        }


        return $this->_options;
   }
}

