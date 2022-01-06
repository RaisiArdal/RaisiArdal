<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_9_0($module)
{
    $module->uninstallOverrides();
    $module->installOverrides();
	return true;
}
