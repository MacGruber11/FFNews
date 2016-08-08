<?php

namespace MacGruber11\FFNews;

use Illuminate\Support\ServiceProvider;

class FFNewsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
        $this->loadViewsFrom(__DIR__.'/resources/views', 'MacGruber11');
        $this->publishes([
            __DIR__.'/migrations/' => base_path('/database/migrations'),
            __DIR__.'/published/soadmin/' => base_path('/app/Admin'),
            __DIR__.'/resources/views' => resource_path('views/vendor/FFNews'),
        ], 'category');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}