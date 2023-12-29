<?php

namespace App\Providers;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Repositories\SingingroomRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(BaseRepositoryInterface::class, SingingroomRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
