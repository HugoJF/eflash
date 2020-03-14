<?php

namespace HugoJF\Eflash;

use Illuminate\Support\ServiceProvider;

class EflashServiceProvider extends ServiceProvider
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
        $this->app->singleton('eflash', function () {
            return new Eflash;
        });
    }
}
