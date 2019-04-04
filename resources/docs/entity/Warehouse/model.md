## Railken\Amethyst\Models\Warehouse

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.warehouse` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Warehouse`
```php
namespace App\Models;

use Railken\Amethyst\Models\Warehouse as Model;

class Warehouse extends Model {
	// ...
}
```
Update the file `configs/amethyst.warehouse` with the new class
```php
return [
    'data' => [
        'warehouse' => [
            'model' => App\Models\Warehouse::class,
        ],
    ]
];
```

---
[Back](index.md)