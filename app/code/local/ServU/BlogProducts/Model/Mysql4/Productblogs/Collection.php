<?php

/**
 * Description of ProductBlogs
 *
 * @author andrewprendergast
 */
class ServU_BlogProducts_Model_Mysql4_Productblogs_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    public function _construct() {
        parent::_construct();
        $this->_init('blogproducts/productblogs');    
    }
    
    protected function _initSelect() {
    	parent::_initSelect();
        return $this;
    }
}
?>
