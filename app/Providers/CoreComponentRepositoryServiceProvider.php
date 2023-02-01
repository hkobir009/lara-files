<?php

namespace App\Providers;

use App\Repositories\CoreComponentRepository;
use Illuminate\Support\ServiceProvider;

class CoreComponentRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('core-component-repository', function () {
            return new CoreComponentRepository();
        });
    }
}
