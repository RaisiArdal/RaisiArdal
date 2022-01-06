<?php
class Tools extends ToolsCore
{
    public static function displayDate($date, $id_lang = null, $full = false, $separator = null)
    {
        if ($id_lang !== null) {
            Tools::displayParameterAsDeprecated('id_lang');
        }
        if ($separator !== null) {
            Tools::displayParameterAsDeprecated('separator');
        }

        if (!$date || !($time = strtotime($date))) {
            return $date;
        }

        if ($date == '0000-00-00 00:00:00' || $date == '0000-00-00') {
            return '';
        }

        if (!Validate::isDate($date) || !Validate::isBool($full)) {
            throw new PrestaShopException('Invalid date');
        }

        $context = Context::getContext();
        $date_format = ($full ? $context->language->date_format_full : $context->language->date_format_lite);
        //return date($date_format, $time); //OLD LINE
		
		return Tools::date($date_format, $time);
    }
	
    // -- NEW FOR PRESTAFA MODULE
    public static function date($dateFormat, $time = null)
    {
		$jalali = Configuration::get('PSFPLUS_JALALI_DATE');
		
        if( $jalali && ($return = Hook::exec('displayCustomDate',array('date_format' => $dateFormat,'time' => $time))) )
        {
            return $return;
        }

        if ( class_exists('Pdate') && Context::getContext()->language->iso_code == 'fa')
            return Pdate::pdate($dateFormat, $time);
		
        if( $time === null )
            return date($dateFormat);

        return date($dateFormat, $time);
    }
    // -- END PRESTAFA MODULE
}