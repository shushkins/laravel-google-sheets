<?php

namespace Revolution\Google\Sheets\Providers;

use Illuminate\Support\ServiceProvider;

use Revolution\Google\Sheets\Sheets;
use Revolution\Google\Sheets\Contracts\Factory;

class SheetsServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return new Sheets();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [Factory::class];
    }
}
