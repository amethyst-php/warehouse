## Railken\Amethyst\Serializers\StockSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\StockManager;

$manager = new StockManager();

$serializer = $manager->getSerializer();
```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array
```
#### Extend the class

Create the new serializer in `app/Serializers/StockSerializer`
```php
namespace App\Serializers;

use Railken\Amethyst\Serializers\StockSerializer as Serializer;

class StockSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'stock' => [
            'serializer' => App\Serializers\StockSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)