<?php

namespace App\Http\Controllers\Users;

use App\Application\Handlers\GetUsersQueryHandler;
use App\Application\Queries\GetUsersQuery;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GetUsersController extends Controller
{
    public function __construct(private GetUsersQueryHandler $queryHandler)
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        // Endpoint prepared to retrieve users active/unactive and with any citizenship.
        // For sake of simplicity, default values are 'active' and 'Austria'
        $isActive = $request->get('is_active') ?? true;
        $citizenship = $request->get('citizenship') ?? 'Austria';

        $users = $this->queryHandler->ask(
            new GetUsersQuery($isActive, $citizenship)
        );

        return new JsonResponse($users->toArray(), Response::HTTP_OK);
    }
}
