<?php
$this->addAttribute('customer_entity', 'telephone', array(
    'type'      => 'varchar',
    'label'     => 'Mobile Number',
    'input'     => 'text',
    'position'  => 120,
    'required'  => true,//or true
    'is_system' => 0,
));
$attribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'telephone');
$attribute->setData('used_in_forms', array(
    'adminhtml_customer',
    'checkout_register',
    'customer_account_create',
    'customer_entity',
    'customer_account_edit',
));
$attribute->setData('is_user_defined', 0);
$attribute->save();