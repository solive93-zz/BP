<?php

namespace App\Domain\Repositories;

use Illuminate\Support\Collection;

interface UserRepository
{
    public function findByCitizenship(string $city): Collection;
}
