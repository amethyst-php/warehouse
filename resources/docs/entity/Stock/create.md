## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\StockManager;

$manager = new StockManager();
```

Create a new [entity](model.md)

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