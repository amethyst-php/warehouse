## Railken\Amethyst\Fakers\WarehouseFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\WarehouseFaker;

$result = $manager->create(WarehouseFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/WarehouseFaker`
```php
namespace App\Fakers;

use Railken\Amethyst\Fakers\WarehouseFaker as Faker;

class WarehouseFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'warehouse' => [
            'faker' => App\Fakers\WarehouseFaker::class,
        ],
    ]
];
```


---
[Back](index.md)