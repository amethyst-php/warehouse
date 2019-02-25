<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\StockFaker;
use Railken\Amethyst\Managers\StockManager;
use Railken\Amethyst\Tests\BaseTest;
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
