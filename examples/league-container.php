<?php

require __DIR__ . '/../vendor/autoload.php';

use DiTest\HelloService;
use League\Container\Container;

// Create the Dependency Injection Container
$container = new Container();

// Set a service (lazy) with parameter
$container->add('filesystem', 'DiTest\HelloService')->withArgument('League');

// Get the service
/** @var HelloService $service */
$service = $container->get('filesystem');

// Use the service
$service->sayHello();
