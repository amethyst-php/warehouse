<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\WarehouseFaker;
use Amethyst\Managers\WarehouseManager;
use Amethyst\Tests\BaseTest;
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
