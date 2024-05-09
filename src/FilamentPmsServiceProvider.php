<?php

namespace TomatoPHP\FilamentPms;

use Illuminate\Support\ServiceProvider;


class FilamentPmsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentPms\Console\FilamentPmsInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-pms.php', 'filament-pms');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-pms.php' => config_path('filament-pms.php'),
        ], 'filament-pms-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-pms-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-pms');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-pms'),
        ], 'filament-pms-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-pms');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-pms'),
        ], 'filament-pms-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        //you boot methods here
    }
}
