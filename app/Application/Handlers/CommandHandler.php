<?php

namespace App\Application\Handlers;

use App\Application\Commands\Command;

interface CommandHandler
{
    public function dispatch(Command $command): void;
}
