## Amethyst\Serializers\WarehouseSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();

$serializer = $manager->getSerializer();
```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array
```
#### Extend the class

Create the new serializer in `app/Serializers/WarehouseSerializer`
```php
namespace App\Serializers;

use Amethyst\Serializers\WarehouseSerializer as Serializer;

class WarehouseSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'warehouse' => [
            'serializer' => App\Serializers\WarehouseSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)