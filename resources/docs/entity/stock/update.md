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

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)