<?php

namespace App\Http\Controllers;

use App\Application\Commands\DeleteUserCommand;
use App\Application\Handlers\DeleteUserCommandHandler;
use Illuminate\Http\JsonResponse;

class DeleteUserController
{
    public function __construct(private DeleteUserCommandHandler $commandHandler)
    {
    }

    public function __invoke(int $userId): JsonResponse
    {
        $this->commandHandler->dispatch(
            new DeleteUserCommand($userId)
        );

        return new JsonResponse('OK', JsonResponse::HTTP_ACCEPTED);
    }
}
