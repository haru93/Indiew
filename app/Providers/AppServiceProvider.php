<?php

namespace App\Providers;

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
     * 本番環境で強制的にhttps化
     * 
     * @return void
     */
    public function boot()
    {
        if (\App::environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
