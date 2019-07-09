# Stock

* [Introduction](#introduction)
* [Attributes](#attributes)
* [Model](#model)
* [Create a new entity](#create)
* [Update an entity](#update)
* [Remove an entity](#remove)
* [Handle the result](#result)
* [Querying](#repository)
* [Authorization](#authorization)
* [Schema](#schema)
* [Validator](#validator)
* [Authorizer](#authorizer)
* [Serializer](#serializer)
* [Faker](#faker)
* [Errors](#errors)
* [Permissions](#permissions)

## <a name="introduction"></a>Introduction

To access the data, you can either use the [manager](#manager) or directly the [Eloquent model](#model). 

If you wish to extend any class, remember to update the configuration. 
You can publish the configuration through the command ```php artisan vendor:publish```

Let's first check the list of all attributes

## <a name="attributes"></a>Attributes

| Name | Fillable | Required | Unique | Default | Comment |
|------|----------|----------|--------|---------|---------|
| id | No | No | No | / | Indentify the entity
| warehouse_id | Yes | Yes | No | null | 
| key | Yes | No | No | null | 
| stock | Yes | Yes | No | null | 
| stockable_type | Yes | Yes | No | null | 
| stockable_id | Yes | Yes | No | null | 
| created_at | No | No | No | / | Indicate the date when the record was created
| updated_at | No | No | No | / | Indicate the date when the record was last updated
| deleted_at | No | No | No | / | Indicate the date when the record was soft-deleted

## <a name="model"></a>Model

Base class ```Amethyst\Models\Stock```

You can extends the class like the following example in  `app/Models/Stock`

```php
namespace App\Models;

use Amethyst\Models\Stock as Model;

class Stock extends Model {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="manager"></a>Manager

Base class ```Amethyst\Managers\StockManager```

The manager is the main class to access and manipulate your model.

Why use the manager instead of the model? Because the manager handle all the boring stuff like validation and authorization for you.
Remember that the manager return always a [Result](#result).

You can extends the class like the following example in `app/Managers/StockManager`
```php
namespace App\Managers;

use Amethyst\Managers\StockManager as Manager;

class StockManager extends Manager {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="create"></a>Create a new entity

First you have to define a new instance of the [Manager](#manager)

```php
use Amethyst\Managers\StockManager;

$manager = new StockManager();
```
Now you can use the method `create` to create a new a new [entity](#model)

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

Retrieve the [entity](#model) from the [result](#result)

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

## <a name="update"></a>Update 

Define a new instance of the [Manager](#manager)

```php
use Amethyst\Managers\StockManager;

$manager = new StockManager();
```

Retrieve an [entity](#model) using the [repository](#repository)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](#model)

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

$result = $manager->update($entity, $params);
```

## <a name="remove"></a>Remove 

Define a new instance of the [Manager](#manager)

```php
use Amethyst\Managers\StockManager;

$manager = new StockManager();
```

```php
$entity = $manager->getRepository()->findOneById(1);

$result = $manager->remove($entity);
```

## <a name="result"></a>Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Amethyst\Managers\StockManager;

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

## <a name="schema"></a>Schema

Base class ```Amethyst\Schemas\StockSchema```

The schema is used to define the structure of the attributes. All the $attributes in the [model](#model) and in the [manager](#manager) are initialized by the schema.

You can extends the class like the following example in  `app/Schemas/StockSchema`
```php
namespace App\Schemas;

use Amethyst\Schemas\StockSchema as Schema;

class StockSchema extends Schema {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="repository"></a>Repository

Base class ```Amethyst\Repositories\StockRepository```

The repository is the class used to perform queries.

```php
use Amethyst\Managers\StockManager;

$manager = new StockManager();

$repository = $manager->getRepository();

```

Retrieving an entity

```php
$repository->findOneBy(['id' => 1]);
$repository->findOneById(1);
```

Retrieving all entities

```php
$repository->findAll();
```

Performing a query using \Illuminate\DataBase\Eloquent\Builder

```php
$repository->newQuery()->where('id', 1)->first();
```

You can extends the class like the following example in `app/Repositories/StockRepository`
```php
namespace App\Repositories;

use Amethyst\Repositories\StockRepository as Repository;

class StockRepository extends Repository {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="serializer"></a>Serializer

Base class ```Amethyst\Serializers\StockSerializer```

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Amethyst\Managers\StockManager;

$manager = new StockManager();

$serializer = $manager->getSerializer();
```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array
```
You can extends the class like the following example in `app/Serializers/StockSerializer`
```php
namespace App\Serializers;

use Amethyst\Serializers\StockSerializer as Serializer;

class StockSerializer extends Serializer {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="faker"></a>Faker

Base class ```Amethyst\Fakers\StockFaker```

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Amethyst\Fakers\StockFaker;

$result = $manager->create(StockFaker::make()->parameters());
```

You can extends the class like the following example in `app/Fakers/StockFaker`
```php
namespace App\Fakers;

use Amethyst\Fakers\StockFaker as Faker;

class StockFaker extends Faker {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="permissions"></a>Permissions

List of all permissions.

| Code                           |
|--------------------------------|
| stock.create |
| stock.update |
| stock.show |
| stock.remove |
| stock.attributes.id.write |
| stock.attributes.id.read |
| stock.attributes.warehouse_id.write |
| stock.attributes.warehouse_id.read |
| stock.attributes.key.write |
| stock.attributes.key.read |
| stock.attributes.stock.write |
| stock.attributes.stock.read |
| stock.attributes.stockable_type.write |
| stock.attributes.stockable_type.read |
| stock.attributes.stockable_id.write |
| stock.attributes.stockable_id.read |
| stock.attributes.created_at.write |
| stock.attributes.created_at.read |
| stock.attributes.updated_at.write |
| stock.attributes.updated_at.read |
| stock.attributes.deleted_at.write |
| stock.attributes.deleted_at.read |

## <a name="errors"></a>Errors

List of all errors.

| Code                           | Message                                      |
|--------------------------------|----------------------------------------------|
| STOCK_WAREHOUSE_ID_NOT_DEFINED | The WAREHOUSE_ID is required |
| STOCK_WAREHOUSE_ID_NOT_VALID | The WAREHOUSE_ID is not valid |
| STOCK_WAREHOUSE_ID_NOT_AUTHORIZED | You're not authorized, missing WAREHOUSE_ID permission |
| STOCK_KEY_NOT_VALID | The KEY is not valid |
| STOCK_KEY_NOT_AUTHORIZED | You're not authorized, missing KEY permission |
| STOCK_STOCK_NOT_DEFINED | The STOCK is required |
| STOCK_STOCK_NOT_VALID | The STOCK is not valid |
| STOCK_STOCK_NOT_AUTHORIZED | You're not authorized, missing STOCK permission |
| STOCK_STOCKABLE_TYPE_NOT_DEFINED | The STOCKABLE_TYPE is required |
| STOCK_STOCKABLE_TYPE_NOT_VALID | The STOCKABLE_TYPE is not valid |
| STOCK_STOCKABLE_TYPE_NOT_AUTHORIZED | You're not authorized, missing STOCKABLE_TYPE permission |
| STOCK_STOCKABLE_ID_NOT_DEFINED | The STOCKABLE_ID is required |
| STOCK_STOCKABLE_ID_NOT_VALID | The STOCKABLE_ID is not valid |
| STOCK_STOCKABLE_ID_NOT_AUTHORIZED | You're not authorized, missing STOCKABLE_ID permission |


[Back](../../index.md)