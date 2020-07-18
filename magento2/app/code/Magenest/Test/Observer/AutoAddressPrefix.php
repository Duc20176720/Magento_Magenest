<?php
namespace Magenest\Test\Observer;


use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;;

class SetAddressPrefix implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $data = $observer->getData('mp_text');
        $country = new \Magento\Framework\DataObject(array('text' => $data['country']));
        $prefix = new \Magento\Framework\DataObject(array('text' => $data['prefix']));


        if ($country == "VN") {
            $prefix->setText('Vietnam');
        }elseif ($country == "CN") {
            $prefix->setText('China');
        }
        return $this;
    }
}
