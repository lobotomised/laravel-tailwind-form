<?php

namespace Lobotomised\LaravelTailwindForm\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Lobotomised\LaravelTailwindForm\LaravelTailwindFormServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelTailwindFormServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
