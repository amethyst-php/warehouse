<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class WarehouseAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'warehouse.create',
        Tokens::PERMISSION_UPDATE => 'warehouse.update',
        Tokens::PERMISSION_SHOW   => 'warehouse.show',
        Tokens::PERMISSION_REMOVE => 'warehouse.remove',
    ];
}
