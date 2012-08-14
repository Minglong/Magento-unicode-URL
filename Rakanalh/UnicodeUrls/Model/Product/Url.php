<?php
class N2Vlabs_UnicodeUrls_Model_Product_Url extends Mage_Catalog_Model_Product_Url
{
    public function formatUrlKey($str)
    {
        //$urlKey = preg_replace('#[^0-9a-z]+#i', '-', Mage::helper('catalog/product_url')->format($str));
        $urlKey = Mage::helper('catalog/product_url')->format($str);
        $urlKey = strtolower($urlKey);
        $urlKey = trim($urlKey, '-');

        return $urlKey;
    }

}
