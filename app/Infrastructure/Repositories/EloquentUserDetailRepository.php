<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\UserDetail;
use App\Domain\Repositories\UserDetailRepository;

class EloquentUserDetailRepository implements UserDetailRepository
{
    public function __construct(private UserDetailElocuentModel $model)
    {
    }

    public function update(int $userId, string $firstName, string $lastName, string $phoneNumber): bool
    {
        $userDetails = $this->model->newQuery()
            ->where('user_id', '=', $userId)
            ->first();

        if (!$userDetails) {
            return false;
        }

        $userDetails = new UserDetail(
            $userDetails->id,
            $userDetails->user_id,
            $userDetails->citizenship_country_id,
            $firstName ?: $userDetails->first_name,
            $lastName ?: $userDetails->last_name,
            $phoneNumber ?: $userDetails->phone_number
        );

        return $this->model->newQuery()->find($userDetails->id())
            ->update($userDetails->toArray());
    }
}
