<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.0yDgcZo' shared service.

return $this->privates['.service_locator.0yDgcZo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'dernekRepository' => ['privates', 'App\\Repository\\DernekRepository', 'getDernekRepositoryService.php', true],
], [
    'dernekRepository' => 'App\\Repository\\DernekRepository',
]);