<?php

namespace RedberryProducts\LaravelVersion;

use RedberryProducts\LaravelVersion\Commands\LaravelVersionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelVersionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-version')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web')
            ->hasMigration('create_laravel_version_table')
            ->hasCommand(LaravelVersionCommand::class);
    }
}
