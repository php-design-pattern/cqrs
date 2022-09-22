<?php

namespace DesignPattern\CQRS\Query\Handler;

use DesignPattern\CQRS\Query\QueryInterface;

class NullHandler implements HandlerInterface
{
    public function __invoke(QueryInterface $query): mixed
    {
    }
}
