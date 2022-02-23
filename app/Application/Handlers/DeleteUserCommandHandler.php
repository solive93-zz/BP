<?php

namespace App\Application\Handlers;

use App\Application\Commands\Command;
use App\Domain\Repositories\UserRepository;

class DeleteUserCommandHandler implements CommandHandler
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function dispatch(Command $command): void
    {
        $this->userRepository->delete($command->userId());
    }
}
