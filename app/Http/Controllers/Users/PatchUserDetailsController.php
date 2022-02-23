<?php

namespace App\Http\Controllers\Users;

use App\Application\Commands\UpdateUserDetailsCommand;
use App\Application\Handlers\UpdateUserDetailsCommandHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PatchUserDetailsController
{
    public function __construct(private UpdateUserDetailsCommandHandler $commandHandler)
    {
    }

    public function __invoke(Request $request, int $userId): JsonResponse
    {
        $firstName   = $request->get('first_name') ?? '';
        $lastName    = $request->get('last_name') ?? '';
        $phoneNumber = $request->get('phone_number') ?? '';

        $this->commandHandler->dispatch(
            new UpdateUserDetailsCommand($userId, $firstName, $lastName, $phoneNumber)
        );

        return new JsonResponse('OK', Response::HTTP_ACCEPTED);
    }
}
