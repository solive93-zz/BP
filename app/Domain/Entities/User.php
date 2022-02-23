<?php

namespace App\Domain\Entities;

class User
{
    public function __construct(private int $id, private string $email, private bool $active)
    {
    }

    public function id(): int
    {
        return $this->id;
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
