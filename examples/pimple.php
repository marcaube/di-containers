<?php

require __DIR__ . '/../vendor/autoload.php';

use DiTest\HelloService;
use Pimple\Container;

// Create the Dependency Injection Container
$container = new Container();

// Set a parameter
$container['name'] = 'Pimple';

// Set a service (lazy)
$container['filesystem'] = function ($c) {
    return new HelloService($c['name']);
};

// Get the service
/** @var HelloService $service */
$service = $container['filesystem'];

// Use the service
$service->sayHello();
