<?php

namespace DesignPattern\CQRS\Command\Handler;

use DesignPattern\CQRS\Command\CommandInterface;

interface HandlerInterface
{
    public function __invoke(CommandInterface $command);
}
