## Railken\Amethyst\Fakers\StockFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\StockFaker;

$result = $manager->create(StockFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/StockFaker`
```php
namespace App\Fakers;

use Railken\Amethyst\Fakers\StockFaker as Faker;

class StockFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'stock' => [
            'faker' => App\Fakers\StockFaker::class,
        ],
    ]
];
```


---
[Back](index.md)