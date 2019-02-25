<?php

return [
    'table'      => 'amethyst_stocks',
    'comment'    => 'Stock',
    'model'      => Railken\Amethyst\Models\Stock::class,
    'schema'     => Railken\Amethyst\Schemas\StockSchema::class,
    'repository' => Railken\Amethyst\Repositories\StockRepository::class,
    'serializer' => Railken\Amethyst\Serializers\StockSerializer::class,
    'validator'  => Railken\Amethyst\Validators\StockValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\StockAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\StockFaker::class,
    'manager'    => Railken\Amethyst\Managers\StockManager::class,
    'attributes' => [
        'stockable' => [
            'options' => [
                Railken\Amethyst\Models\Foo::class => Railken\Amethyst\Managers\FooManager::class,
            ],
        ],
    ],
];
