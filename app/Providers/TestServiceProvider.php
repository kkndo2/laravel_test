<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /*
        $this->app->bind(\App\Services\Test::class, function ($app) {
            return new \App\Services\Test();
        });
*/
        //$this->app->bind(\App\Services\Test::class, \App\Services\Test::class);

        //$this->app->singleton(\App\Services\Test::class, \App\Services\Test::class);

        $value=3;
        $this->app->when(\App\Services\Test::class)
            ->needs('$b')
            ->give($value);

        $this->app->when(\App\Services\Test::class)
            ->needs('$c')
            ->give(5);
    }
}
