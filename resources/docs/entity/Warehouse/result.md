## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();

$result = $manager->create([
    "name" => "Louisa Fahey",
    "description" => "Libero dolor laborum ratione quaerat. Sed illo recusandae ut aut et. Dolorem nemo unde ut in sint ab."
]);

if ($result->ok()) {

    $resource = $result->getResource();

} else {

    // Loop through all errors
    $result->getErrors()->map(function($error) {
        return $error->toArray();
    }))

    // Retrieve an array of all errors
    $result->getSimpleErrors();

    /* The result is something like this:

        [0] => Array
            (
                [code] => FIELD_NOT_DEFINED
                [label] => field
                [message] => The field is required
                [value] =>
            )
    */

}
```

---
[Back](index.md)