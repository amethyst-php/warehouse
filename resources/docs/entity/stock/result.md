## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\StockManager;

$manager = new StockManager();

$result = $manager->create([
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