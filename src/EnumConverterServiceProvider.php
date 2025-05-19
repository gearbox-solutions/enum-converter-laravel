<?php

namespace GearboxSolutions\EnumConverter;

use GearboxSolutions\EnumConverter\Commands\EnumConverterCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EnumConverterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('enum-converter-laravel')
            ->hasConfigFile()
            ->hasCommand(EnumConverterCommand::class);
    }
}
