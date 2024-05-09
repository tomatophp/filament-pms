<?php

namespace TomatoPHP\FilamentPms;

use Filament\Contracts\Plugin;
use Filament\Panel;


class FilamentPMSPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-pms';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
