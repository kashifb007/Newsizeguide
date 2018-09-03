<?php
class Lindybop_Newsizeguide_Helper_Data extends Mage_Core_Helper_Data
{

    public function getSizes()
    {

        $product = $this->getProduct();
        
        $setId = $product->getAttributeSetId();
        $groups = Mage::getModel('eav/entity_attribute_group')
            ->getResourceCollection()
            ->setAttributeSetFilter($setId)
            ->setSortOrder()
            ->load();


        foreach ($groups as $group) 
        {
            if($group->getAttributeGroupName() == 'Local Sizes')
            {
                $attributes = Mage::getResourceModel('catalog/product_attribute_collection')
                ->setAttributeGroupFilter($group->getId())
                ->addVisibleFilter()
                ->checkConfigurableProducts()
                ->load();
                if ($attributes->getSize() > 0) 
                {
                    foreach ($attributes->getItems() as $attribute) 
                    {

                        if($attribute->getAttributeCode() == 'size_uk_label')
                        {                                                        
                            $attributeValues[$attribute->getFrontendLabel()] = $product->getAttributeText($attribute->getAttributeCode());     

                        }
                        else
                        {
                            if($attribute->getFrontendLabel() !== 'UK Alt Sizes')
                                {
                                    $attribute_label = str_replace(' (cm)', '', $attribute->getFrontendLabel());
                                    $attributeValues[$attribute_label] = $product->getData($attribute->getAttributeCode());                       
                                }                
                        }                      
                    }
                    if($attributeValues['UK Size']=='')
                    {
                        foreach ($attributes->getItems() as $attribute) 
                        {

                            if($attribute->getAttributeCode() == 'uk_alt_sizes')
                            {                                                        
                                $attributeValues['UK Size'] = $product->getAttributeText($attribute->getAttributeCode());                                                         
                            }        
                        }
                    }
                } 
            }
        }

        return($attributeValues);
        
    }

    public function getProduct()
    {
        return Mage::registry('current_product');
    }
}