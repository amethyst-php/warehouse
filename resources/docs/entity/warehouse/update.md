## Update 

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "Prof. Rodger Marvin",
    "description" => "Fuga aut natus sed harum. Alias qui veritatis facilis aut voluptatem. Autem impedit et voluptatem voluptatum modi ipsam accusamus. Vel quia dolorum repellendus nulla molestias sed."
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)