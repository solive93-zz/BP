<?php

namespace App\Providers;

use App\Domain\Repositories\UserDetailRepository;
use App\Domain\Repositories\UserRepository;
use App\Infrastructure\Repositories\EloquentUserDetailRepository;
use App\Infrastructure\Repositories\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, EloquentUserRepository::class);
        $this->app->bind(UserDetailRepository::class, EloquentUserDetailRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
