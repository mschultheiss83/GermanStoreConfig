<?php
class IntegerNet_GermanStoreConfig_Germanstoreconfig_RemovecustomeraccountlinksController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_forward('edit', 'system_config', null, array('section' => 'removecustomeraccountlinks'));
    }
}
