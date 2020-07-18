<?php

namespace Magenest\WeddingEvent\Setup\Patch\Data;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class AddWeddingIdAttribute implements DataPatchInterface
{
    private $eavSetupFactory;
    private $moduleDataSetup;

    public function __construct(EavSetupFactory $eavSetupFactory,
                                ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public function apply()
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $eavSetup->addAttribute('catalog_product', 'wedding_id',
            [
                'type' => 'text',
                'backend' => '',
                'frontend' => '',
                'label' => 'Wedding ID',
                'input' => 'text',
                'class' => '',
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => '',
                'searchable' => true,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
                'used_in_product_listing' => true,
                'unique' => false,
                'apply_to' => ''
            ]);
        // TODO: Implement apply() method.
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
