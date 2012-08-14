<?php
class Rakanalh_UnicodeUrls_Model_Category extends Mage_Catalog_Model_Category
{
    public function formatUrlKey($str)
    {
        $urlKey = str_replace(' ', '-', $str);
        return $urlKey;
    }
}
