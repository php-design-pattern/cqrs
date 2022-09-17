<?php

declare(strict_types=1);

namespace DesignPatternTest\CQRS\Command\Handler;

use DesignPattern\CQRS\Command\Handler\HandlerInterface;
use PHPUnit\Framework\TestCase;

use function interface_exists;

class HandlerInterfaceTest extends TestCase
{
    /**
     * @test
     */
    public function interfaceExist(): void
    {
        $this->assertTrue(interface_exists(HandlerInterface::class));
    }
}
