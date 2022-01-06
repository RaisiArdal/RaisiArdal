<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_0($module)
{
    $sql = 'ALTER TABLE `'._DB_PREFIX_.'psfpay_transaction` 
            CHANGE `trans_reference` `trans_reference` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
            CHANGE `trans_authority` `trans_authority` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;';
    try{
        Db::getInstance()->execute($sql);
    }
    catch (PrestaShopDatabaseException $e){

    }

	return true;
}