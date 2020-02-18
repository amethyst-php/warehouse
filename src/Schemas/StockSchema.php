<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\WarehouseManager;
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
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('warehouse_id')
                ->setRelationName('warehouse')
                ->setRelationManager(WarehouseManager::class)
                ->setRequired(true),
            Attributes\TextAttribute::make('key'),
            Attributes\NumberAttribute::make('stock')
                ->setRequired(true),
            Attributes\EnumAttribute::make('stockable_type', app('amethyst')->getDataNames())
                ->setRequired(true),
            Attributes\MorphToAttribute::make('stockable_id')
                ->setRelationKey('stockable_type')
                ->setRelationName('stockable')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
