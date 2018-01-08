<?php

namespace DeGraciaMathieu\Riddler;

use DeGraciaMathieu\Riddler\Password;
use Illuminate\Support\ServiceProvider;

class RiddlerServiceProvider extends ServiceProvider{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(Password::class, function($app) {
            return new Password();
        });
    }
}
