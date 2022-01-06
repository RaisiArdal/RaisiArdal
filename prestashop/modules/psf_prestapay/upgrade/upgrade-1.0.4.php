<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_0_4($module)
{
    $sql = 'ALTER TABLE `'._DB_PREFIX_.'psfpay_transaction` 
            CHANGE `trans_id_cart` `trans_id_cart` INT(10) NULL DEFAULT NULL,
            CHANGE `trans_id_order` `trans_id_order` INT(10) NULL DEFAULT NULL,
            CHANGE `trans_id_customer` `trans_id_customer` INT(10) NULL DEFAULT NULL,
            ADD `trans_values` TEXT NULL DEFAULT NULL AFTER `trans_card_number`, 
            ADD `trans_plugin` VARCHAR(256) NULL DEFAULT NULL AFTER `trans_values`;';
    try{
        Db::getInstance()->execute($sql);
    }
    catch (PrestaShopDatabaseException $e){

    }

	return true;
}