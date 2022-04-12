<?php

namespace Lobotomised\LaravelTailwindForm\Tests;

use Lobotomised\LaravelTailwindForm\LaravelTailwindFormServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

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
