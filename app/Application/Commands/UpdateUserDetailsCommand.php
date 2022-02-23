<?php

namespace App\Application\Commands;

class UpdateUserDetailsCommand implements Command
{
    public function __construct(
        private int $userId, private string $firstName, private string $lastName, private string $phoneNumber
    ) {
    }

    public function userId(): int
    {
        return $this->userId;
    }

    public function firstName(): string
    {
        return $this->firstName;
    }

    public function lastName(): string
    {
        return $this->lastName;
    }

    public function phoneNumber(): string
    {
        return $this->phoneNumber;
    }
}
