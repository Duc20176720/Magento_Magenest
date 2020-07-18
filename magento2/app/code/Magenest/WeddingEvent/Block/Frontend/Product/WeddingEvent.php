<?php


namespace Magenest\WeddingEvent\Block\Frontend\Product;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magenest\WeddingEvent\Model\ResourceModel\WeddingEvent\CollectionFactory;


class WeddingEvent extends Template
{
    protected $_product = null;
    protected $_coreRegistry;
    protected $_collectionFactory;

    public function __construct(Template\Context $context,
                                Registry $registry,
                                CollectionFactory $collectionFactory,
                                array $data = [])
    {
        $this->_coreRegistry = $registry;
        $this->_collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = $this->_coreRegistry->registry('product');
        }
        return $this->_product;
    }


    public function getWeddingEvent($id)
    {
        $wedding = $this->_collectionFactory->create()->getItemById($id);
        return $wedding;
    }
}
