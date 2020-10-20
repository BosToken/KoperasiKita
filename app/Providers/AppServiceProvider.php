<?php

namespace App\Providers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.user.sidebar', function ($view) {
            view()->share(['user' => session::get('user')]);
        });
    }
}
