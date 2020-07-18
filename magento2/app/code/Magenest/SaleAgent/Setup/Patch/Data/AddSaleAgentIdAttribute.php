<?php

namespace Magenest\SaleAgent\Setup\Patch\Data;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddSaleAgentIdAttribute implements DataPatchInterface
{
//    /**
//     * ModuleDataSetupInterface
//     *
//     * @var ModuleDataSetupInterface
//     */
    private $moduleDataSetup;

//    /**
//     * EavSetupFactory
//     *
//     * @var EavSetupFactory
//     */
    private $eavSetupFactory;

//    /**
//     * AddRecommendedAttribute constructor.
//     *
//     * @param ModuleDataSetupInterface  $moduleDataSetup
//     * @param EavSetupFactory           $eavSetupFactory
//     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory)
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function apply()
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);

        $eavSetup->addAttribute('catalog_product', 'sale_agent_id', [
            'type' => 'text',
            'label' => 'Sale Agent ID',
            'input' => 'text',
            'source' => '',
            'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
            'visible' => true,
            'searchable'=>true,
            'filterable'=>false,
            'comparable'=>false,
            'used_in_product_listing' => true,
            'user_defined' => true,
            'visible_on_front'=>true,
            'required' => false,
            'group' => 'General',
            'sort_order' => 80,
        ]);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}