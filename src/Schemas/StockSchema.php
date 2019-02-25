<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Managers\WarehouseManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class StockSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        $stockableConfig = Config::get('amethyst.warehouse.data.stock.attributes.stockable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('warehouse_id')
                ->setRelationName('warehouse')
                ->setRelationManager(WarehouseManager::class)
                ->setRequired(true),
            Attributes\NumberAttribute::make('stock'),
            Attributes\EnumAttribute::make('stockable_type', array_keys($stockableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('stockable_id')
                ->setRelationKey('stockable_type')
                ->setRelationName('stockable')
                ->setRelations($stockableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
