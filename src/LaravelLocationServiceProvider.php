<?php

namespace Karim007\LaravelLocation;
use Illuminate\Support\ServiceProvider;
use Karim007\LaravelLocation\Location\Location;

class LaravelLocationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register application services
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("location", function () {
            return new Location();
        });
    }
}
