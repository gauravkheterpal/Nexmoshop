<?php
$installer = $this;
$installer->startSetup();

$installer->run("
    DROP TABLE IF EXISTS {$this->getTable('nexmoshop_table')};


 CREATE TABLE {$this->getTable('nexmoshop_table')}(
nexmoshop_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
updated timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
api_key VARCHAR(30) NOT NULL,
secret_key VARCHAR(50)
)
  ");
 
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
 
$entityTypeId     = $setup->getEntityTypeId('customer');
$attributeSetId   = $setup->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $setup->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);
 
$setup->addAttribute('customer', 'mobile', array(
    'input'         => 'text',
    'type'          => 'varchar',
    'label'         => 'Mobile',
    'visible'       => 1,
    'required'      => 1,
    'user_defined' => 1,
    'global' =>1,
    'visible_on_front'  => 1,
));
 
$setup->addAttributeToGroup(
 $entityTypeId,
 $attributeSetId,
 $attributeGroupId,
 'mobile',
 '999'  //sort_order
);
 
$oAttribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'mobile');
$oAttribute->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'));
$oAttribute->save();
$installer->endSetup();