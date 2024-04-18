<?php

namespace CookieMC337\FilamentProgressColumn;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentProgressColumnServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-progress-column';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('filament-progress-column', __DIR__ . '/../resources/dist/progress.css'),
        ], 'cookiemc337/filament-progress-column');
    }
}
