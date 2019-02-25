<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\StocksController::class,
    'router'     => [
        'as'     => 'stock.',
        'prefix' => '/stocks',
    ],
];
