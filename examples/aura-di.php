<?php

require __DIR__ . '/../vendor/autoload.php';

use Aura\Di\Container;
use Aura\Di\Factory;
use DiTest\HelloService;

// Create the Dependency Injection Container
$container = new Container(new Factory());

// Set a parameter
$container->params['DiTest\HelloService']['name'] = 'Aura.Di';

// Set a service (lazy)
$container->set('filesystem', $container->lazyNew('DiTest\HelloService'));

// Get the service
/** @var HelloService $service */
$service = $container->get('filesystem');

// Use the service
$service->sayHello();
