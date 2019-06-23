<?php

namespace Railken\Amethyst\Tests;

use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate:fresh');
        
        app('amethyst')->pushMorphRelation('stock', 'stockable', 'foo');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Railken\Amethyst\Providers\WarehouseServiceProvider::class,
            \Railken\Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
