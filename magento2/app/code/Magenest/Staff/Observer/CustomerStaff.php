<?php


namespace Magenest\Staff\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomerStaff implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $customer = $observer->getCustomer()->getData();

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $data = $objectManager->create('Magenest\Staff\Model\Staff');
        $data->setCustomerId($customer['entity_id']);
        $data->setNickName($customer['firstname'] . $customer['lastname']);
        $data->setType($customer['staff_type']);
        $data->setStatus('2');
        $data->save();
        // TODO: Implement execute() method.
    }
}
