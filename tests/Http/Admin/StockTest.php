<?php

namespace Amethyst\Tests\Http\Admin;

use Amethyst\Core\Support\Testing\TestableBaseTrait;
use Amethyst\Fakers\StockFaker;
use Amethyst\Tests\BaseTest;

class StockTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = StockFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'admin.stock';
}
