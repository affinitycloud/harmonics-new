<?php
// Version 100
class Microbiz_Connector_Model_Connectorcataloginventory extends Mage_Core_Model_Abstract
{

    /**
     * Internal constructor not depended on params. Can be used for object initialization
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('connectorcataloginventory/connectorcataloginventory');
    }
}
