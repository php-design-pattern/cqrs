<?php

namespace DesignPattern\CQRS\Command\Handler;

use DesignPattern\CQRS\Command\CommandInterface;

class NullHandler implements HandlerInterface
{
    public function __invoke(CommandInterface $command): void
    {
    }
}
