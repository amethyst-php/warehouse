## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\StockManager;

$manager = new StockManager();

$result = $manager->create([
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