<?php

declare(strict_types=1);

namespace DesignPatternTest\CQRS\Query;

use DesignPattern\CQRS\Query\QueryInterface;
use PHPUnit\Framework\TestCase;

use function interface_exists;

class QueryInterfaceTest extends TestCase
{
    /**
     * @test
     */
    public function interfaceExist(): void
    {
        $this->assertTrue(interface_exists(QueryInterface::class));
    }
}
