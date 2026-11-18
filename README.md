# Typed Shopify GraphQL Client Library
This is a strongly-typed PHP client library for interacting with the Shopify GraphQL API. For every GraphQL object, we have generated corresponding query builders and result classes, enabling a fluent, intuitive, and type-safe development experience.

Stop guessing field names and start leveraging your IDE's autocompletion!

## Supported Shopify GraphQL APIs
Classes are generated for every Admin API version Shopify currently supports, each in its own namespace:

| Admin API version | Namespace |
|---|---|
| 2026-01 | `Fo3nix\ShopifyGraphQL\ShopifyAdmin202601` |
| 2026-04 | `Fo3nix\ShopifyGraphQL\ShopifyAdmin202604` |
| 2026-07 | `Fo3nix\ShopifyGraphQL\ShopifyAdmin202607` |
| 2026-10 | `Fo3nix\ShopifyGraphQL\ShopifyAdmin202610` |

A monthly workflow regenerates these from Shopify's schemas, adds new versions and removes versions Shopify retires. All generated classes are prefixed with `Shopify`.

## Requirements
- PHP 8.3 or newer

## Features
- **Fluent Query Builder:** Construct complex GraphQL queries with a simple and readable PHP object interface.
- **Mutations:** Every mutation is available on `ShopifyRootMutationQueryObject`, with typed argument and input objects.
- **Interfaces and Unions:** Select type-specific fields with `on{Type}()` inline fragments; results are hydrated into their concrete class.
- **Native Types and Docs:** Getters, setters and selectors use native PHP types and carry Shopify's schema descriptions as PHPDoc.
- **Strongly-Typed Result Objects:** Automatically map API responses to dedicated PHP classes.
- **IDE Autocompletion:** Get full autocompletion for queries and results, reducing errors and speeding up development.
- **Automatic Type Handling:** Includes automatic handling of date/time fields with Carbon and recursive handling of nested objects.

## Installation
`composer require fo3nix/shopify-graphql-php-app`

## Usage
### Example: Query Builder and Execution
The following example demonstrates how to build a query to fetch the first 5 customers and their last 3 orders, then execute it.

```php
<?php

// The namespace corresponds to the API version.
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRootQueryObject;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRootCustomersArgumentsObject;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerOrdersArgumentsObject;

// 1. Initialize your GraphQL client
$client = new \GraphQL\Client(
    'https://{your-shop-name}.myshopify.com/admin/api/2026-10/graphql.json',
    ['X-Shopify-Access-Token' => '{your-admin-api-token}']
);

// 2. Build the query using the ShopifyRootQueryObject
$queryRoot = new ShopifyRootQueryObject();

$queryRoot->selectCustomers(
    (new ShopifyRootCustomersArgumentsObject())->setFirst(5)
)
    ->selectEdges()
        ->selectNode()
            ->selectId()
            ->selectFirstName()
            ->selectLastName()
            ->selectEmail()
            ->selectOrders((new ShopifyCustomerOrdersArgumentsObject())->setFirst(3))
                ->selectEdges()
                    ->selectNode()
                        ->selectId()
                        ->selectName()
                        ->selectTotalPriceSet()
                            ->selectShopMoney()
                                ->selectAmount()
                                ->selectCurrencyCode();

// 3. Run the query
// The second argument 'true' tells the client to return an associative array.
$results = $client->runQuery($queryRoot->getQuery(), true);

// The raw data is now ready to be mapped to result objects.
$customersData = $results->getData()['customers']['edges'];
```

### Example: Mapping Results to Objects
This example takes the raw array from the previous step and hydrates it into strongly-typed `ShopifyCustomer` and `ShopifyOrder` objects.

```php
<?php

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomer;

// $customersData is the result from the query execution example above.

// 1. Hydrate the raw array into an array of ShopifyCustomer objects
$customers = array_map(function ($customerEdge) {
    // The fromArray() method handles all nested objects recursively
    return ShopifyCustomer::fromArray($customerEdge['node']);
}, $customersData);


// 2. Use the type-hinted objects with full IDE autocompletion
echo "Customer List:\n";
foreach ($customers as $customer) {
    /** @var ShopifyCustomer $customer */
    echo "====================\n";
    echo "Customer ID: " . $customer->getId() . "\n";
    echo "Name: " . $customer->getFirstName() . " " . $customer->getLastName() . "\n";
    echo "Email: " . $customer->getEmail() . "\n";
    
    echo "Recent Orders:\n";
    if ($customer->getOrders() && $customer->getOrders()->getEdges()) {
        foreach ($customer->getOrders()->getEdges() as $orderEdge) {
            $order = $orderEdge->getNode(); // This is now a strongly-typed ShopifyOrder object
            echo "  - Order #" . $order->getName() . "\n";
            echo "    Total: " . $order->getTotalPriceSet()->getShopMoney()->getAmount() . " " . $order->getTotalPriceSet()->getShopMoney()->getCurrencyCode() . "\n";
        }
    } else {
        echo "  No orders found.\n";
    }
}

// You can also convert objects back to an array if needed
// $customerArray = $customers[0]->asArray();
// print_r($customerArray);
```

### Example: Running a Mutation
Mutations are built the same way, starting from `ShopifyRootMutationQueryObject`.

```php
<?php

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRootMutationQueryObject;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRootMutationProductCreateArgumentsObject;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductCreateInputInputObject;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductStatusEnumObject;

$mutation = new ShopifyRootMutationQueryObject();

$productCreate = $mutation->selectProductCreate(
    (new ShopifyRootMutationProductCreateArgumentsObject())->setProduct(
        (new ShopifyProductCreateInputInputObject())
            ->setTitle('Cool new product')
            ->setStatus(ShopifyProductStatusEnumObject::DRAFT)
    )
);
$productCreate->selectProduct()
    ->selectId()
    ->selectTitle();
$productCreate->selectUserErrors()
    ->selectField_()
    ->selectMessage();

$results = $client->runQuery($mutation->getQuery(), true);
```

## Upgrading from 1.x
Version 2 is generated with `fo3nix/php-graphql-oqm` v2, which brings breaking changes:
- PHP 8.3 is required, and generated code uses native types.
- Selectors of fields with required arguments take a mandatory arguments object, and missing required values throw a `MissingRequiredValueException` before the request is sent.
- Falsy input values (`false`, `0`, `""`, `[]`) are now sent instead of being omitted.
- Union selections include `__typename`, and interface/union results are hydrated into their concrete class.
