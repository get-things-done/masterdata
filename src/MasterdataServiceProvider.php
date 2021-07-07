<?php

namespace GetThingsDone\Masterdata;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use GetThingsDone\Masterdata\Commands\MasterdataCommand;

class MasterdataServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('masterdata')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_masterdata_table')
            ->hasCommand(MasterdataCommand::class);
    }
}
