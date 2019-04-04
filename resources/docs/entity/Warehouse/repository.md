## Railken\Amethyst\Repositories\WarehouseRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();

$repository = $manager->getRepository();

```

Retrieving an entity

```php
$repository->findOneBy(['id' => 1]);
$repository->findOneById(1);

```

Retrieving all entities

```php
$repository->findAll();
```

Performing a query using \Illuminate\DataBase\Eloquent\Builder

```php
$repository->newQuery()->where('id', 1)->first();

```

#### Extend the class

Create the new repository in `app/Repositories/WarehouseRepository`
```php
namespace App\Repositories;

use Railken\Amethyst\Repositories\WarehouseRepository as Repository;

class WarehouseRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'warehouse' => [
            'repository' => App\Repositories\WarehouseRepository::class,
        ],
    ]
];
```

---
[Back](index.md)