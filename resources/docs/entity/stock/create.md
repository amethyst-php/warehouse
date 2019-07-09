## Create

Define a new instance of the [Manager](manager.md)

```php
use Amethyst\Managers\StockManager;

$manager = new StockManager();
```

Create a new [entity](model.md)

```php
$params = [
    "warehouse" => [
        "name" => "Kristopher Kuhn",
        "description" => "Harum soluta nemo et dolores earum. Explicabo quisquam ut eos debitis. Possimus id et distinctio consequatur fugit deleniti. Aut autem nisi iure ut velit."
    ],
    "key" => 10,
    "stock" => 10,
    "stockable_type" => "foo",
    "stockable" => [
        "name" => "Gaston Feil",
        "description" => "Ut asperiores eaque deserunt doloribus veniam doloremque aut. Soluta nihil eos asperiores pariatur cum illo eos. Ea corporis a qui impedit nesciunt.",
        "bar" => [
            "name" => "Bessie Haley",
            "description" => "Culpa quo molestias quibusdam qui. Facilis et quidem tenetur harum. Est voluptatem quis ut eos non voluptas sit. Eos voluptatem cumque exercitationem ipsum et."
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
        "name" => "Kristopher Kuhn",
        "description" => "Harum soluta nemo et dolores earum. Explicabo quisquam ut eos debitis. Possimus id et distinctio consequatur fugit deleniti. Aut autem nisi iure ut velit."
    ],
    "key" => 10,
    "stock" => 10,
    "stockable_type" => "foo",
    "stockable" => [
        "name" => "Gaston Feil",
        "description" => "Ut asperiores eaque deserunt doloribus veniam doloremque aut. Soluta nihil eos asperiores pariatur cum illo eos. Ea corporis a qui impedit nesciunt.",
        "bar" => [
            "name" => "Bessie Haley",
            "description" => "Culpa quo molestias quibusdam qui. Facilis et quidem tenetur harum. Est voluptatem quis ut eos non voluptas sit. Eos voluptatem cumque exercitationem ipsum et."
        ]
    ]
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