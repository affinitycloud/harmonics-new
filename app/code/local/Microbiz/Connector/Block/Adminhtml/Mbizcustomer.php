<?php
// Version 100
class Microbiz_Connector_Block_Adminhtml_Mbizcustomer extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_controller = 'adminhtml_mbizcustomer';
		$this->_blockGroup = 'microbiz_connector';
		$this->_headerText = Mage::helper('microbiz_connector')->__('Customer Relations');
		parent::__construct();
		$this->_removeButton('add');
	}
}
