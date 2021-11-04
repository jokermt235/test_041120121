<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Optional\Simples\ISimple;
use App\Optional\Simples\Simple;

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
        $this->app->bind(ISimple::class, Simple::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
