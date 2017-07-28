<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('App\Repositories\PlayerInterface', 'App\Repositories\PlayerRepository');
    }
}
