<?php

namespace DiTest;

class HelloService
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name = 'world')
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo sprintf('Hello %s!', $this->name) . PHP_EOL;
    }
}
