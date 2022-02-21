<?php

namespace App\Domain\Entities;

class User
{
    public function __construct(private string $email, private bool $active)
    {
    }

    public function email(): string
    {
        return $this->email;
    }

    public function active(): bool
    {
        return $this->active;
    }

    public function toArray(): array
    {
        return [
            'email' => $this->email,
            'active' => $this->active
        ];
    }
}
