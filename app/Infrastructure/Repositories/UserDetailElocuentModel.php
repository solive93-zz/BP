<?php

namespace App\Infrastructure\Repositories;

use Illuminate\Database\Eloquent\Model;

class UserDetailElocuentModel extends Model
{
    protected $table    = 'user_details';
    public $timestamps  = false;
    protected $fillable = [
        'id', 'user_id', 'citizenship_country_id', 'first_name', 'last_name', 'phone_number'
    ];
}
