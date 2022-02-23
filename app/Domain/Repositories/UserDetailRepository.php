<?php

namespace App\Domain\Repositories;

interface UserDetailRepository
{
    public function update(int $userId, string $firstName, string $lastName, string $phoneNumber): bool;
}
