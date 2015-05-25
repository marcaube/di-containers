<?php

require __DIR__ . '/../vendor/autoload.php';

use DiTest\HelloService;
use mindplay\boxy\Container;

// Create the Dependency Injection Container
$container = new Container();

// Set a service with parameter
$container->insertService(new HelloService('Boxy'));

// Get the service
$container->invoke(function (HelloService $service) {

    // Use the service
    $service->sayHello();
});
