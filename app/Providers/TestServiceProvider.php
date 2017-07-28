<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Laravel\Dusk\DuskServiceProvider;

class TestServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
	    if ($this->app->environment('local', 'testing')) {
	        $this->app->register(DuskServiceProvider::class);
	    }
	}
}