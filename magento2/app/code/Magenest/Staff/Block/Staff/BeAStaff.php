<?php

//namespace Magenest\Staff\Block\Staff;
//
//
//use Magento\Framework\View\Element\Template;
//use Magenest\Staff\Model\ResourceModel\Staff\CollectionFactory;
//
//class BeAStaff extends Template
//{
//    protected $_collectionFactory;
//
//    public function __construct(CollectionFactory $database, Template\Context $context, array $data = [])
//    {
//        $this->_collectionFactory = $database;
//        parent::__construct($context, $data);
//    }
//
//    public function getInfo()
//    {
//        $data = $this->_collectionFactory->create();
//        return $data->getData();
//    }
//}
//


namespace Magenest\Staff\Block\Staff;

use Magenest\Staff\Model\ResourceModel\Staff\CollectionFactory;

class BeAStaff extends \Magento\Framework\View\Element\Template
{
    protected $currentCustomer;
    protected $_eventFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer,
        \Magenest\Staff\Model\ResourceModel\Staff\CollectionFactory $eventFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->currentCustomer = $currentCustomer;
        $this->_eventFactory = $eventFactory;
        $this->getEvents();
    }public function getInfo()
{
    $data = $this->_eventFactory->create();
    return $data->getData();
}



//    public function getEvents(){
//        $currentCustomerId = $this->currentCustomer->getCustomerId();
//        $eventId = $this->getRequest()->getParams();
//        if(empty($eventId['event_fn']) && empty($eventId['event_ln'])){
//            $eventCollection = $this->_eventFactory->create()->addFieldToFilter('customer_id', $currentCustomerId);
//            $data = $eventCollection->getData();
//            return $data;
//        }
//        else
//        {
//            $eventCollection = $this->_eventFactory->create()
//                ->addFieldToFilter('ship_firstname',$eventId['event_fn'])
//                ->addFieldToFilter('ship_lastname',$eventId['event_ln']);
//            $data =$eventCollection->getData();
//            return $data;
//        }
//    }
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
//    public function getViewUrl($event)
//    {
//        return $this->getUrl('giftregistry/customer/viewregistry/', ['event_id' => $event['event_id']]);
//    }
//    public function getBackUrl(){
//        return $this->getUrl('customer/account/index');
//    }
//    public function getNewRegistryUrl(){
//        return $this->getUrl('giftregistry/customer/newregistry');
//    }
//    public function getUpdateUrl(){
//        return $this->getUrl('giftregistry/customer/registry');
//    }
//    public function getEditUrl($event){
//        return $this->getUrl('giftregistry/customer/editregistry',['event_id' => $event['event_id']]);
//    }
}
