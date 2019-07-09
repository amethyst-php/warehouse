## Amethyst\Schemas\WarehouseSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/WarehouseSchema`
```php
namespace App\Schemas;

use Amethyst\Schemas\WarehouseSchema as Schema;

class WarehouseSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'warehouse' => [
            'schema' => App\Schemas\WarehouseSchema::class,
        ],
    ]
];
```

---
[Back](index.md)