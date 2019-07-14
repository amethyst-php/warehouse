<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Stock                 newEntity()
 * @method \Amethyst\Schemas\StockSchema          getSchema()
 * @method \Amethyst\Repositories\StockRepository getRepository()
 * @method \Amethyst\Serializers\StockSerializer  getSerializer()
 * @method \Amethyst\Validators\StockValidator    getValidator()
 * @method \Amethyst\Authorizers\StockAuthorizer  getAuthorizer()
 */
class StockManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.warehouse.data.stock';
}
