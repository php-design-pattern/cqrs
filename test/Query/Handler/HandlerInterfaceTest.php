<?php

namespace DesignPatternTest\CQRS\Query\Handler;

use DesignPattern\CQRS\Query\Handler\HandlerInterface;
use PHPUnit\Framework\TestCase;

use function interface_exists;

class HandlerInterfaceTest extends TestCase
{
    /**
     * @test
     */
    public function interfaceExist()
    {
        $this->assertTrue(interface_exists(HandlerInterface::class));
    }
}
