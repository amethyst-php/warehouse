## Railken\Amethyst\Validators\WarehouseValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/WarehouseValidator`
```php
namespace App\Validators;

use Railken\Amethyst\Validators\WarehouseValidator as Validator;

class WarehouseValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'warehouse' => [
            'validator' => App\Validators\WarehouseValidator::class,
        ],
    ]
];
```

---
[Back](index.md)