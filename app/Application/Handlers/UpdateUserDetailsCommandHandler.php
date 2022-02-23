<?php

namespace App\Application\Handlers;

use App\Application\Commands\UpdateUserDetailsCommand;
use \App\Application\Commands\Command;
use App\Domain\Repositories\UserDetailRepository;

class UpdateUserDetailsCommandHandler implements CommandHandler
{
    public function __construct(private UserDetailRepository $userDetailRepository)
    {
    }

    public function dispatch(UpdateUserDetailsCommand|Command $command): void
    {
        $this->userDetailRepository->update(
            $command->userId(),
            $command->firstName(),
            $command->lastName(),
            $command->phoneNumber()
        );
    }
}
