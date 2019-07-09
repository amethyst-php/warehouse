<?php

return [
    'table'      => 'amethyst_warehouses',
    'comment'    => 'Warehouse',
    'model'      => Amethyst\Models\Warehouse::class,
    'schema'     => Amethyst\Schemas\WarehouseSchema::class,
    'repository' => Amethyst\Repositories\WarehouseRepository::class,
    'serializer' => Amethyst\Serializers\WarehouseSerializer::class,
    'validator'  => Amethyst\Validators\WarehouseValidator::class,
    'authorizer' => Amethyst\Authorizers\WarehouseAuthorizer::class,
    'faker'      => Amethyst\Fakers\WarehouseFaker::class,
    'manager'    => Amethyst\Managers\WarehouseManager::class,
];
