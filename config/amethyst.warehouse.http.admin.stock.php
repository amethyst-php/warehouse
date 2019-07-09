<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\StocksController::class,
    'router'     => [
        'as'     => 'stock.',
        'prefix' => '/stocks',
    ],
];
