<?php

namespace App\Application\Handlers;

use App\Application\Queries\GetUsersQuery;
use App\Application\Queries\Query;
use App\Domain\Repositories\UserRepository;

final class GetUsersQueryHandler implements QueryHandler
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function ask(GetUsersQuery|Query $query): mixed
    {
        return $this->userRepository->findByCitizenship($query->citizenship());
    }
}
