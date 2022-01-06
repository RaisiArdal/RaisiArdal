<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_0_3($module)
{
    $module->registerHook('displayPaymentReturn');

    Configuration::updateValue('PSFPAY_PAGE_CONFIRM','1');

	return true;
}