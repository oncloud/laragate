<?php
namespace Lectero\Laragate;

use Illuminate\Support\ServiceProvider;
use Lectero\Laragate\Console\MakePermission;

class LaragateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('laragate', function($app) {
            return new Laragate();
        });
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laragate');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laragate.php'),
            ], 'config');

            $this->commands([
                MakePermission::class,
            ]);
        }
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}