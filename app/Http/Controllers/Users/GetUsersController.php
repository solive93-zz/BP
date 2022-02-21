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
        $citizenship = $request->get('citizenship') ?? null;

        // Assuming users queried will always be the active ones
        $users = $this->queryHandler->ask(
            new GetUsersQuery(true, $citizenship)
        );

        return new JsonResponse($users->toArray(), Response::HTTP_OK);
    }
}
