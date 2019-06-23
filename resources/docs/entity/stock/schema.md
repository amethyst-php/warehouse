## Railken\Amethyst\Schemas\StockSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/StockSchema`
```php
namespace App\Schemas;

use Railken\Amethyst\Schemas\StockSchema as Schema;

class StockSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'stock' => [
            'schema' => App\Schemas\StockSchema::class,
        ],
    ]
];
```

---
[Back](index.md)