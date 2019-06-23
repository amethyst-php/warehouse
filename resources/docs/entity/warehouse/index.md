# Warehouse

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
| name | Yes | Yes | Yes | null | 
| description | Yes | No | No | null | 
| created_at | No | No | No | / | Indicate the date when the record was created
| updated_at | No | No | No | / | Indicate the date when the record was last updated
| deleted_at | No | No | No | / | Indicate the date when the record was soft-deleted

## <a name="model"></a>Model

Base class ```Railken\Amethyst\Models\Warehouse```

You can extends the class like the following example in  `app/Models/Warehouse`

```php
namespace App\Models;

use Railken\Amethyst\Models\Warehouse as Model;

class Warehouse extends Model {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="manager"></a>Manager

Base class ```Railken\Amethyst\Managers\WarehouseManager```

The manager is the main class to access and manipulate your model.

Why use the manager instead of the model? Because the manager handle all the boring stuff like validation and authorization for you.
Remember that the manager return always a [Result](#result).

You can extends the class like the following example in `app/Managers/WarehouseManager`
```php
namespace App\Managers;

use Railken\Amethyst\Managers\WarehouseManager as Manager;

class WarehouseManager extends Manager {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="create"></a>Create a new entity

First you have to define a new instance of the [Manager](#manager)

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();
```
Now you can use the method `create` to create a new a new [entity](#model)

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

Retrieve the [entity](#model) from the [result](#result)

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

## <a name="update"></a>Update 

Define a new instance of the [Manager](#manager)

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();
```

Retrieve an [entity](#model) using the [repository](#repository)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](#model)

```php
$params = [
    "name" => "Prof. Rodger Marvin",
    "description" => "Fuga aut natus sed harum. Alias qui veritatis facilis aut voluptatem. Autem impedit et voluptatem voluptatum modi ipsam accusamus. Vel quia dolorum repellendus nulla molestias sed."
];

$result = $manager->update($entity, $params);
```

## <a name="remove"></a>Remove 

Define a new instance of the [Manager](#manager)

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();
```

```php
$entity = $manager->getRepository()->findOneById(1);

$result = $manager->remove($entity);
```

## <a name="result"></a>Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();

$result = $manager->create([
    "name" => "Prof. Rodger Marvin",
    "description" => "Fuga aut natus sed harum. Alias qui veritatis facilis aut voluptatem. Autem impedit et voluptatem voluptatum modi ipsam accusamus. Vel quia dolorum repellendus nulla molestias sed."
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

Base class ```Railken\Amethyst\Schemas\WarehouseSchema```

The schema is used to define the structure of the attributes. All the $attributes in the [model](#model) and in the [manager](#manager) are initialized by the schema.

You can extends the class like the following example in  `app/Schemas/WarehouseSchema`
```php
namespace App\Schemas;

use Railken\Amethyst\Schemas\WarehouseSchema as Schema;

class WarehouseSchema extends Schema {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="repository"></a>Repository

Base class ```Railken\Amethyst\Repositories\WarehouseRepository```

The repository is the class used to perform queries.

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();

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

You can extends the class like the following example in `app/Repositories/WarehouseRepository`
```php
namespace App\Repositories;

use Railken\Amethyst\Repositories\WarehouseRepository as Repository;

class WarehouseRepository extends Repository {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="serializer"></a>Serializer

Base class ```Railken\Amethyst\Serializers\WarehouseSerializer```

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\WarehouseManager;

$manager = new WarehouseManager();

$serializer = $manager->getSerializer();
```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array
```
You can extends the class like the following example in `app/Serializers/WarehouseSerializer`
```php
namespace App\Serializers;

use Railken\Amethyst\Serializers\WarehouseSerializer as Serializer;

class WarehouseSerializer extends Serializer {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="faker"></a>Faker

Base class ```Railken\Amethyst\Fakers\WarehouseFaker```

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\WarehouseFaker;

$result = $manager->create(WarehouseFaker::make()->parameters());
```

You can extends the class like the following example in `app/Fakers/WarehouseFaker`
```php
namespace App\Fakers;

use Railken\Amethyst\Fakers\WarehouseFaker as Faker;

class WarehouseFaker extends Faker {
	// ...
}
```
Remember to update the configuration with new class.

## <a name="permissions"></a>Permissions

List of all permissions.

| Code                           |
|--------------------------------|
| warehouse.create |
| warehouse.update |
| warehouse.show |
| warehouse.remove |
| warehouse.attributes.id.write |
| warehouse.attributes.id.read |
| warehouse.attributes.name.write |
| warehouse.attributes.name.read |
| warehouse.attributes.description.write |
| warehouse.attributes.description.read |
| warehouse.attributes.created_at.write |
| warehouse.attributes.created_at.read |
| warehouse.attributes.updated_at.write |
| warehouse.attributes.updated_at.read |
| warehouse.attributes.deleted_at.write |
| warehouse.attributes.deleted_at.read |

## <a name="errors"></a>Errors

List of all errors.

| Code                           | Message                                      |
|--------------------------------|----------------------------------------------|
| WAREHOUSE_NAME_NOT_DEFINED | The NAME is required |
| WAREHOUSE_NAME_NOT_VALID | The NAME is not valid |
| WAREHOUSE_NAME_NOT_AUTHORIZED | You're not authorized, missing NAME permission |
| WAREHOUSE_NAME_NOT_UNIQUE | The NAME is not unique |
| WAREHOUSE_DESCRIPTION_NOT_VALID | The DESCRIPTION is not valid |
| WAREHOUSE_DESCRIPTION_NOT_AUTHORIZED | You're not authorized, missing DESCRIPTION permission |


[Back](../../index.md)