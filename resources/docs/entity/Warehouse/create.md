## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Louisa Fahey",
    "description" => "Libero dolor laborum ratione quaerat. Sed illo recusandae ut aut et. Dolorem nemo unde ut in sint ab."
];

$result = $manager->create($params);
```

Check the result of the operation

```php
if ($result->ok()) {
    // All ok
} else {
    // Something goes wrong
}
```

Retrieve the [entity](model.md) from the [result](result.md)

```php
$entity = $result->getResource();
```

Throw an exception immediately if the operation fails

```php
use Railken\Lem\Exceptions\Exception;

$params = [
    "name" => "Louisa Fahey",
    "description" => "Libero dolor laborum ratione quaerat. Sed illo recusandae ut aut et. Dolorem nemo unde ut in sint ab."
];
   
try {
    $result = $manager->createOrFail($params);
} catch (Exception $e) {
    // ...
}
```

### Links
* [Attributes](attributes.md)
* [Errors](errors.md)
* [Handle the result](result.md)

---
[Back](index.md)