<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.5NSJ8J9' shared service.

return $this->privates['.service_locator.5NSJ8J9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'category' => ['privates', '.errored..service_locator.5NSJ8J9.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.5NSJ8J9": it references class "App\\Entity\\Category" but no such service exists.'],
    'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true],
], [
    'category' => 'App\\Entity\\Category',
    'categoryRepository' => 'App\\Repository\\CategoryRepository',
]);
