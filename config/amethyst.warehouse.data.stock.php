<?php

return [
    'table'      => 'amethyst_stocks',
    'comment'    => 'Stock',
    'model'      => Amethyst\Models\Stock::class,
    'schema'     => Amethyst\Schemas\StockSchema::class,
    'repository' => Amethyst\Repositories\StockRepository::class,
    'serializer' => Amethyst\Serializers\StockSerializer::class,
    'validator'  => Amethyst\Validators\StockValidator::class,
    'authorizer' => Amethyst\Authorizers\StockAuthorizer::class,
    'faker'      => Amethyst\Fakers\StockFaker::class,
    'manager'    => Amethyst\Managers\StockManager::class,
    'attributes' => [
        'stockable' => [
            'options' => [],
        ],
    ],
];
