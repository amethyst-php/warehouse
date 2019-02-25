<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\WarehouseFaker;
use Railken\Amethyst\Managers\WarehouseManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class WarehouseTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = WarehouseManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = WarehouseFaker::class;
}
