## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\StockManager;

$manager = new StockManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "warehouse" => [
        "name" => "Tad McKenzie",
        "description" => "Voluptatum ad cumque asperiores. Dolorem ipsum modi vel eaque. Laudantium pariatur facilis minima neque repellendus."
    ],
    "stock" => 10,
    "stockable_type" => "Railken\\Amethyst\\Models\\Foo",
    "stockable" => [
        "name" => "Gussie Lindgren",
        "description" => "Alias voluptas et facere reiciendis. Iste suscipit id iure impedit blanditiis et voluptatem aut. Nihil rerum soluta sed repellendus. Eum assumenda quam eum iste aut ad.",
        "bar" => [
            "name" => "Orion Blanda",
            "description" => "Voluptatem ea fugiat deleniti amet dolore. Non dolores in qui et laboriosam inventore nostrum quasi. Et quo explicabo cum doloremque adipisci dolores omnis."
        ]
    ]
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)