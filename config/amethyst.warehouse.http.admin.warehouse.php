<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\WarehousesController::class,
    'router'     => [
        'as'     => 'warehouse.',
        'prefix' => '/warehouses',
    ],
];
