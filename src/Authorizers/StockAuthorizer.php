<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class StockAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'stock.create',
        Tokens::PERMISSION_UPDATE => 'stock.update',
        Tokens::PERMISSION_SHOW   => 'stock.show',
        Tokens::PERMISSION_REMOVE => 'stock.remove',
    ];
}
