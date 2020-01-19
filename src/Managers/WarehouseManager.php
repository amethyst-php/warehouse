<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Warehouse                 newEntity()
 * @method \Amethyst\Schemas\WarehouseSchema          getSchema()
 * @method \Amethyst\Repositories\WarehouseRepository getRepository()
 * @method \Amethyst\Serializers\WarehouseSerializer  getSerializer()
 * @method \Amethyst\Validators\WarehouseValidator    getValidator()
 * @method \Amethyst\Authorizers\WarehouseAuthorizer  getAuthorizer()
 */
class WarehouseManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.warehouse.data.warehouse';
}
