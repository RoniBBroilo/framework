<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.module.configuration.payment_restrictions_configurator' shared service.

return $this->services['prestashop.core.module.configuration.payment_restrictions_configurator'] = new \PrestaShop\PrestaShop\Core\Module\Configuration\PaymentRestrictionsConfigurator(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'frm', ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id, ($this->services['prestashop.adapter.module.payment_module_provider'] ?? $this->load('getPrestashop_Adapter_Module_PaymentModuleProviderService.php')));
