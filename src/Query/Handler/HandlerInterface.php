<?php

declare(strict_types=1);

namespace DesignPattern\CQRS\Query\Handler;

use DesignPattern\CQRS\Query\QueryInterface;

interface HandlerInterface
{
    public function __invoke(QueryInterface $query);
}
