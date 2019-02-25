<?php

return [
    'table'      => 'amethyst_warehouses',
    'comment'    => 'Warehouse',
    'model'      => Railken\Amethyst\Models\Warehouse::class,
    'schema'     => Railken\Amethyst\Schemas\WarehouseSchema::class,
    'repository' => Railken\Amethyst\Repositories\WarehouseRepository::class,
    'serializer' => Railken\Amethyst\Serializers\WarehouseSerializer::class,
    'validator'  => Railken\Amethyst\Validators\WarehouseValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\WarehouseAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\WarehouseFaker::class,
    'manager'    => Railken\Amethyst\Managers\WarehouseManager::class,
];
