## Amethyst\Repositories\StockRepository

The repository is the class to perform queries.

```php
use Amethyst\Managers\StockManager;

$manager = new StockManager();

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

Create the new repository in `app/Repositories/StockRepository`
```php
namespace App\Repositories;

use Amethyst\Repositories\StockRepository as Repository;

class StockRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'stock' => [
            'repository' => App\Repositories\StockRepository::class,
        ],
    ]
];
```

---
[Back](index.md)