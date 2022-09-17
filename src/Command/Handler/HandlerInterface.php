<?php

declare(strict_types=1);

namespace DesignPattern\CQRS\Command\Handler;

use DesignPattern\CQRS\Command\CommandInterface;

interface HandlerInterface
{
    public function __invoke(CommandInterface $command): void;
}
