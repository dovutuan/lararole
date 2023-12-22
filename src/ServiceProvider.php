<?php

namespace Dovutuan\Lararole;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/Config/lararole.php';
        $this->mergeConfigFrom($configPath, 'lararole');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $configPath = __DIR__ . '/Config/lararole.php';

        if ($this->app->runningInConsole()) {
            $this->publishes(
                [$configPath => config_path('lararole.php')],
                'lararole'
            );
        }

        $this->loadMigrationsFrom(__DIR__ . '/Databases/Migrations');
    }
}