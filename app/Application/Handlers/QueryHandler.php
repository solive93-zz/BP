<?php

namespace App\Application\Handlers;

use App\Application\Queries\Query;

interface QueryHandler
{
    public function ask(Query $query): mixed;
}
