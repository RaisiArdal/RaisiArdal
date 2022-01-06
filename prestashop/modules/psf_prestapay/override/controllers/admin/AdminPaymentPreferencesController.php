<?php
class AdminPaymentPreferencesController extends AdminPaymentPreferencesControllerCore
{
    public function __construct()
    {
        $this->bootstrap = true;
        AdminController::__construct();

        $id_shop = Context::getContext()->shop->id;

        /* Get all modules then select only payment ones */
        $modules = Module::getModulesOnDisk(true);
        //$moduleManagerBuilder = ModuleManagerBuilder::getInstance();
        //$moduleRepository = $moduleManagerBuilder->buildRepository();

        foreach ($modules as $module) {
            //$addonModule = $moduleRepository->getModule($module->name);
            //if ($addonModule->attributes->get('parent_class') == 'PaymentModule') {
            if ($module->tab == 'payments_gateways') {
                if ($module->id) {
                    if (!get_class($module) == 'SimpleXMLElement') {
                        $module->country = array();
                    }

                    $sql = new DbQuery();
                    $sql->select('`id_country`');
                    $sql->from('module_country');
                    $sql->where('`id_module` = '.(int)$module->id);
                    $sql->where('`id_shop` = '.(int)$id_shop);
                    $countries = Db::getInstance()->executeS($sql);
                    foreach ($countries as $country) {
                        $module->country[] = $country['id_country'];
                    }

                    if (!get_class($module) == 'SimpleXMLElement') {
                        $module->currency = array();
                    }

                    $sql = new DbQuery();
                    $sql->select('`id_currency`');
                    $sql->from('module_currency');
                    $sql->where('`id_module` = '.(int)$module->id);
                    $sql->where('`id_shop` = '.(int)$id_shop);
                    $currencies = Db::getInstance()->executeS($sql);
                    foreach ($currencies as $currency) {
                        $module->currency[] = $currency['id_currency'];
                    }

                    if (!get_class($module) == 'SimpleXMLElement') {
                        $module->group = array();
                    }

                    $sql = new DbQuery();
                    $sql->select('`id_group`');
                    $sql->from('module_group');
                    $sql->where('`id_module` = '.(int)$module->id);
                    $sql->where('`id_shop` = '.(int)$id_shop);
                    $groups = Db::getInstance()->executeS($sql);
                    foreach ($groups as $group) {
                        $module->group[] = $group['id_group'];
                    }

                    if (!get_class($module) == 'SimpleXMLElement') {
                        $module->reference = array();
                    }
                    $sql = new DbQuery();
                    $sql->select('`id_reference`');
                    $sql->from('module_carrier');
                    $sql->where('`id_module` = '.(int)$module->id);
                    $sql->where('`id_shop` = '.(int)$id_shop);
                    $carriers = Db::getInstance()->executeS($sql);
                    foreach ($carriers as $carrier) {
                        $module->reference[] = $carrier['id_reference'];
                    }
                } else {
                    $module->country = null;
                    $module->currency = null;
                    $module->group = null;
                }

                $this->payment_modules[] = $module;
            }
        }
    }

}
