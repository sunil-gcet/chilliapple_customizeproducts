<?php
namespace Chilliapple\Customizeproducts\Block\Adminhtml\Productcategory\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_productcategory_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Product Categories'));
    }
}