<?php

namespace App\Application\Commands;

class DeleteUserCommand implements Command
{
    public function __construct(private int $userId)
    {
    }

    public function userId(): int
    {
        return $this->userId;
    }
}
