<?php
/*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
*  @author ST themes <www.sunnytoo.com>
*  @copyright 2018 ST themes team.
*/
if (!defined('_PS_VERSION_'))
	exit;

class StDbClear extends Module
{
    public  $fields_form;
	private $_html = '';
    public $_prefix_st = 'ST_DB_CLEAR_';
    public $tables = array(
        array(
            'name'=>'connections',
            'id' => 'connections'
        ),
        /*array(
            'name'=>'connections_page[Accessed page durations]',
            'id' => 'connections_page'
        ),*/
        array(
            'name'=>'connections_source',
            'id' => 'connections_source'
        ),
        array(
            'name'=>'guest',
            'id' => 'guest'
        ),
        /*array(
            'name'=>'log',
            'id' => 'log'
        ),*/
    );
	function __construct()
	{
		$this->name          = 'stdbclear';
		$this->tab           = 'front_office_features';
		$this->version       = '1.0.0';
		$this->author        = 'SUNNYTOO.COM';
		$this->need_instance = 0;
        $this->bootstrap     = true;
        
		parent::__construct();

		$this->displayName = $this->l('Basic Prestashop database cleaner.');
		$this->description = $this->l('Clean up useless old data from your database to speed your site up.');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
	}
    
	function install()
	{
		return parent::install();
	}

	public function uninstall()
	{
        return parent::uninstall(); 
	}
    
	public function getContent()
	{
        if (Tools::isSubmit('save'.$this->name) || Tools::isSubmit('save'.$this->name.'AndStay')) {
            $table = [];
            foreach($this->tables as $val) {
                
                if (Tools::getValue('table_'.$val['id'])) {
                    $this->clearTable($val['id']);
                    $table[] = _DB_PREFIX_ . $val['id'];
                }
            }
            if ($table) {
                $this->_html .= $this->displayConfirmation(sprintf($this->l('Tables %s were cleared up.'), implode(', ', $table)));
            } else {
                $this->_html .= $this->displayError($this->l('Please select a table.'));
            }
        }
        $this->initTables();
        $this->initFieldsForm();
		$helper = $this->initForm();
        $this->_html .= $helper->generateForm($this->fields_form);
        return $this->_html;
	}

    public function initFieldsForm()
    {
        $this->fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Clean up'),
                'icon'  => 'icon-cogs'
            ),
            'input' => array(
                array(
                    'type' => 'checkbox',
                    'label' => $this->l('Tables'),
                    'name' => 'table',
                    'lang' => false,
                    'values' => array(
                        'query' => $this->tables,
                        'id' => 'id',
                        'name' => 'name'
                    ),
                ),
                array(
                    'type' => 'html',
                    'id' => '',
                    'label' => '',
                    'name' => $this->l('The "connection" table is for the "Data mining for statistics" module, the module will add a new record to the table for every new connection to store data like when and who connects to your site. The table can be huge if your site has a lot of traffics. It\'s totally okay to clean it up.').'<br/><br/>'.
                        $this->l('The "connections_source" table is also majorly used by the "Data mining for statistics" module, it stores data of where your site visitors come from, how people jump from one page to another, the table can also be huge. It\'s totally okay to clean it up.').'<br/><br/>'.
                        $this->l('The "Data mining for statistics" module creates a record for every new visitors stored in the "guest" table to store information like browser type, screen resolution, operating system, language, etc. It\'s totally okay to clean it up.'),
                ),
            ),
			'submit' => array(
				'title' => $this->l('Clean up'),
                'stay' => true
			),
        );
    }
    
    protected function initForm()
	{
	    $helper = new HelperForm();
		$helper->show_toolbar = false;
        $helper->module = $this;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;

		$helper->identifier = $this->identifier;
		$helper->submit_action = 'save'.$this->name;
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues(),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);
		return $helper;
	}
    
    private function getConfigFieldsValues()
    {
        $fields_values = array();
        foreach($this->tables as $k => $v) {
            $fields_values['table_'.$v['id']] = 1;
        }
        return $fields_values;
    }

    private function initTables()
    {
        foreach($this->tables as &$val) {
            $val['name'] = _DB_PREFIX_ . $val['name'] . ' (' . $this->getTableTotal($val['id']) . ')';
        }
    }

    private function getTableTotal($table)
    {
        return Db::getInstance()->getValue('SELECT COUNT(0) FROM ' . _DB_PREFIX_ . $table);
    }

    private function clearTable($table)
    {
        return Db::getInstance()->execute('TRUNCATE TABLE ' . _DB_PREFIX_ . $table);
    }
}