## Railken\Amethyst\Authorizers\StockAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/StockAuthorizer`
```php
namespace App\Authorizers;

use Railken\Amethyst\Authorizers\StockAuthorizer as Authorizer;

class StockAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'stock' => [
            'authorizer' => App\Authorizers\StockAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)