<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\StockFaker;
use Amethyst\Managers\StockManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class StockTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = StockManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = StockFaker::class;
}
