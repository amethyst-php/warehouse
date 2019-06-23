## Railken\Amethyst\Authorizers\WarehouseAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/WarehouseAuthorizer`
```php
namespace App\Authorizers;

use Railken\Amethyst\Authorizers\WarehouseAuthorizer as Authorizer;

class WarehouseAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'warehouse' => [
            'authorizer' => App\Authorizers\WarehouseAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)