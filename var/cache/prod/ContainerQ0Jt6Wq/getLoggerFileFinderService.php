<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFileFinder'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.1.7', \dirname(__DIR__, 4)))), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename'] ?? $this->load('getLoggerFilenameService.php')));
