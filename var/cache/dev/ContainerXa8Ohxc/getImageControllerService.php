<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\ImageController' shared autowired service.

$this->services['App\\Controller\\Admin\\ImageController'] = $instance = new \App\Controller\Admin\ImageController();

$instance->setContainer(($this->privates['.service_locator.CDOTD6.'] ?? $this->load('get_ServiceLocator_CDOTD6_Service.php'))->withContext('App\\Controller\\Admin\\ImageController', $this));

return $instance;
