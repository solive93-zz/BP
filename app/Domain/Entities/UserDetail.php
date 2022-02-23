<?php

namespace App\Domain\Entities;

class UserDetail
{
    public function __construct(
        private int $id,
        private int $userId,
        private int $citizenshipCountryId,
        private string $firstName,
        private string $lastName,
        private string $phoneNumber
    ) {
    }


    public function id(): int
    {
        return $this->id;
    }

    public function userId(): int
    {
        return $this->userId;
    }

    public function citizenshipCountryId(): int
    {
        return $this->citizenshipCountryId;
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

    public function toArray()
    {
        return [
            'id'                     => $this->id,
            'user_id'                => $this->userId,
            'citizenship_country_id' => $this->citizenshipCountryId,
            'first_name'             => $this->firstName,
            'last_name'              => $this->lastName,
            'phone_number'           => $this->phoneNumber

        ];
    }
}
