<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class StockFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('warehouse', WarehouseFaker::make()->parameters()->toArray());
        $bag->set('stock', 10);
        $bag->set('stockable_type', 'foo');
        $bag->set('stockable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
