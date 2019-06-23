## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Prof. Rodger Marvin",
    "description" => "Fuga aut natus sed harum. Alias qui veritatis facilis aut voluptatem. Autem impedit et voluptatem voluptatum modi ipsam accusamus. Vel quia dolorum repellendus nulla molestias sed."
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
    "name" => "Prof. Rodger Marvin",
    "description" => "Fuga aut natus sed harum. Alias qui veritatis facilis aut voluptatem. Autem impedit et voluptatem voluptatum modi ipsam accusamus. Vel quia dolorum repellendus nulla molestias sed."
];
   
try {
    $result = $manager->createOrFail($params);
} catch (Exception $e) {
    // ...
}
```

## Other resources
* [Attributes](attributes.md)
* [Errors](errors.md)
* [Handle the result](result.md)

---
[Back](index.md)