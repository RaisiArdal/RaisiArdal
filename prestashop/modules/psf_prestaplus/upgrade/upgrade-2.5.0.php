<?php
/**
 * PrestaPlus Upgrade to Version 2.5.0
 *
 * @website     Prestafa.com
 * @copyright	(c) 2018 - Prestafa Team
 * @author      Ali Shareei <alishareei@gmail.com>
 * @since       2 February 2015
 */

if (!defined('_PS_VERSION_'))
    exit;

function upgrade_module_2_5_0($module)
{
    return $module->registerHook('moduleRoutes');
}
