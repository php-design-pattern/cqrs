<?php

namespace DesignPatternTest\CQRS\Command;

use DesignPattern\CQRS\Command\CommandInterface;
use PHPUnit\Framework\TestCase;

use function interface_exists;

class CommandInterfaceTest extends TestCase
{
    /**
     * @test
     */
    public function interfaceExist()
    {
        $this->assertTrue(interface_exists(CommandInterface::class));
    }
}
