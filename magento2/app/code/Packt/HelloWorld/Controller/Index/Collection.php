<?php

namespace Packt\HelloWorld\Controller\Index;

class Collection extends \Magento\Framework\App\Action\Action{
    public function execute()
    {
        $productCollection = $this -> _objectManager ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect(['name','price','image'])
            //-> setPageSize(10,1);
            ->addAtrributeToFilter('entity_id', array('in'=> array(159,160,161)));
        $output = '';
        $productCollection->setDataToAll('price', 20);
        foreach ($productCollection as $product) {
            $output .= \Zend\Debug\Debug::dump($product->debug(), null,
                false);
        }

        $this -> getResponse() -> setBody($output);
    }
}