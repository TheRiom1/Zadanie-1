<?php

namespace App\Providers;


use App\Repository\PersonRepository;
use App\Repository\IPersonRepository;
use App\Service\Service;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            IPersonRepository::class,
            PersonRepository::class,
            PersonService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        //
    }
}