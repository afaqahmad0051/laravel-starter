<?php

namespace Afaq\StarterTools;

use Illuminate\Support\ServiceProvider;

class StarterToolsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        // Publish configuration files
        $this->publishes([
            __DIR__ . '/../config/pint.json' => base_path('pint.json'),
            __DIR__ . '/../config/phpstan.neon' => base_path('phpstan.neon'),
        ], 'laravel-setup-tools-config');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
