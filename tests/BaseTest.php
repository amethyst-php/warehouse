<?php

namespace Amethyst\Tests;

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
            \Amethyst\Providers\WarehouseServiceProvider::class,
            \Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
