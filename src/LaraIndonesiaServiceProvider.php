<?php

namespace Ravialdo\LaraIndonesia\Providers;

use Illuminate\Support\ServiceProvider;

class LaraIndonesiaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
 
        $this->loadTranslationsFrom(__DIR__.'/..resources/lang', 'in');

        $this->publishes([
           __DIR__.'/../resources/lang' => resource_path('lang'),
         ]);

    }
}
