<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.api.stock.repository' shared service.

return $this->services['prestashop.core.api.stock.repository'] = new \PrestaShopBundle\Entity\Repository\StockRepository($this, ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\ImageManager'] ?? $this->load('getImageManagerService.php')), ($this->services['prestashop.core.data_provider.stock_interface'] ?? ($this->services['prestashop.core.data_provider.stock_interface'] = new \PrestaShop\PrestaShop\Adapter\StockManager())), 'frm');
