<?php

namespace App\Application\Queries;

final class GetUsersQuery implements Query
{
    public function __construct(private bool $isActive, private string $citizenship)
    {
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function citizenship(): string
    {
        return $this->citizenship;
    }
}
