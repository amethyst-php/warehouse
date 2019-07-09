<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\WarehousesController::class,
    'router'     => [
        'as'     => 'warehouse.',
        'prefix' => '/warehouses',
    ],
];
