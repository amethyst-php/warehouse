## Railken\Amethyst\Validators\StockValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/StockValidator`
```php
namespace App\Validators;

use Railken\Amethyst\Validators\StockValidator as Validator;

class StockValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'stock' => [
            'validator' => App\Validators\StockValidator::class,
        ],
    ]
];
```

---
[Back](index.md)