<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.extension.multistore_configuration' shared service.

return $this->services['form.extension.multistore_configuration'] = new \PrestaShopBundle\Form\Admin\Extension\MultistoreConfigurationTypeExtension(${($_ = isset($this->services['prestashop.multistore_checkbox_enabler']) ? $this->services['prestashop.multistore_checkbox_enabler'] : $this->load('getPrestashop_MultistoreCheckboxEnablerService.php')) && false ?: '_'});
