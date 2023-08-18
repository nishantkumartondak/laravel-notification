<?php

namespace App\Providers;

use App\Repositories\EmailRepository;
use App\Repositories\Interfaces\EmailRepositoryInterface;
use App\Repositories\Interfaces\SMSRepositoryInterface;
use App\Repositories\SMSRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(EmailRepositoryInterface::class, EmailRepository::class);
        $this->app->bind(SMSRepositoryInterface::class, SMSRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
