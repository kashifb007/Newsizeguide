<?php

$installer = $this;

$installer->startSetup();
try {
    $installer->addAttribute('catalog_product', 'size_uk_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'UK Size',
            'input'             => 'multiselect',
            'backend'           => 'eav/entity_attribute_backend_array',
            'frontend'          => '',
            'source'            => '',
            'option' => array ( 'value' => array('optionone' => array('6'),
                                                'optiontwo' => array('8'),
                                                'optionthree' => array('10'),
                                                'optionfour' => array('12'),
                                                'optionfive' => array('14'),
                                                'optionsix' => array('16'),
                                                'optionseven' => array('18'),
                                                'optioneight' => array('20'),
                                                'optionnine' => array('22'),
                                                'optionten' => array('24'),
                                                'optioneleven' => array('26'),
                                                ) ),
            'default'    => 'optionone',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

    $installer->addAttribute('catalog_product', 'size_bust_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'Bust (cm)',
            'input'             => 'text',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

    $installer->addAttribute('catalog_product', 'size_waist_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'Waist (cm)',
            'input'             => 'text',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

    $installer->addAttribute('catalog_product', 'size_hips_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'Hips (cm)',
            'input'             => 'text',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

    $installer->addAttribute('catalog_product', 'size_length_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'Length (cm)',
            'input'             => 'text',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

    $installer->addAttribute('catalog_product', 'size_armhole_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'Armhole (cm)',
            'input'             => 'text',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

    $installer->addAttribute('catalog_product', 'size_cuff_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'Cuff (cm)',
            'input'             => 'text',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

    $installer->addAttribute('catalog_product', 'size_belt_label', array(
            'group'             => 'Local Sizes',
            'type'              => 'varchar',
            'label'             => 'Belt (cm)',
            'input'             => 'text',
            'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'visible'           => true,
            'required'          => false,
            'searchable'        => false,
            'filterable'        => false,
            'comparable'        => false,
            'visible_on_front'  => true,
            'unique'            => false,
            'apply_to'          => 'configurable',
            'is_configurable'   => false
        ));

} catch (Exception $e) {

    Mage::logException($e);
}
$installer->endSetup(); 