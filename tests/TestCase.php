<?php

namespace GetThingsDone\Masterdata\Tests;

use GetThingsDone\Masterdata\MasterdataServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'GetThingsDone\\Masterdata\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MasterdataServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        $migration = require __DIR__.'/../database/migrations/create_masterdata_table.php.stub';
        $migration->up();
    }
}
