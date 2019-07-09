## Amethyst\Models\Stock

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.warehouse` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Stock`
```php
namespace App\Models;

use Amethyst\Models\Stock as Model;

class Stock extends Model {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'stock' => [
            'model' => App\Models\Stock::class,
        ],
    ]
];
```

---
[Back](index.md)