# Typed Shopify GraphQL Client Library
This is a strongly-typed PHP client library for interacting with the Shopify GraphQL API. For every GraphQL object, we have generated corresponding query builders and result classes, enabling a fluent, intuitive, and type-safe development experience.

Stop guessing field names and start leveraging your IDE's autocompletion!

## Supported Shopify GraphQL APIs
- Admin API Version: 2025-07

## Features
- **Fluent Query Builder:** Construct complex GraphQL queries with a simple and readable PHP object interface.
- **Strongly-Typed Result Objects:** Automatically map API responses to dedicated PHP classes.
- **IDE Autocompletion:** Get full autocompletion for queries and results, reducing errors and speeding up development.
- **Automatic Type Handling:** Includes automatic handling of date/time fields with Carbon and recursive handling of nested objects.

## Installation
`composer require your-vendor/typed-shopify-graphql-client`

## Usage
### Example: Query Builder and Execution
The following example demonstrates how to build a query to fetch the first 5 customers and their last 3 orders, then execute it.

```php
<?php

// Assuming your client and generated classes are autoloaded.
// The namespace will correspond to the API version.
use YourVendor\ShopifyAdmin202507\RootQueryObject;
use YourVendor\ShopifyAdmin202507\RootCustomersArgumentsObject;
use YourVendor\ShopifyAdmin202507\CustomerOrdersArgumentsObject;

// 1. Initialize your GraphQL client
$client = new \GraphQL\Client(
    'https://{your-shop-name}[.myshopify.com/admin/api/2025-07/graphql.json](https://.myshopify.com/admin/api/2025-07/graphql.json)',
    ['X-Shopify-Access-Token' => '{your-admin-api-token}']
);

// 2. Build the query using the RootQueryObject
$queryRoot = new RootQueryObject();

$queryRoot->selectCustomers(
    (new RootCustomersArgumentsObject())->setFirst(5)
)
    ->selectEdges()
        ->selectNode()
            ->selectId()
            ->selectFirstName()
            ->selectLastName()
            ->selectEmail()
            ->selectOrders((new CustomerOrdersArgumentsObject())->setFirst(3))
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
This example takes the raw array from the previous step and hydrates it into strongly-typed Customer and Order objects.

```php
<?php

// Use your generated result classes
use YourVendor\ShopifyAdmin202507\Customer;

// $customersData is the result from the query execution example above.

// 1. Hydrate the raw array into an array of Customer objects
$customers = array_map(function ($customerEdge) {
    // The fromArray() method handles all nested objects recursively
    return Customer::fromArray($customerEdge['node']);
}, $customersData);


// 2. Use the type-hinted objects with full IDE autocompletion
echo "Customer List:\n";
foreach ($customers as $customer) {
    /** @var Customer $customer */
    echo "====================\n";
    echo "Customer ID: " . $customer->getId() . "\n";
    echo "Name: " . $customer->getFirstName() . " " . $customer->getLastName() . "\n";
    echo "Email: " . $customer->getEmail() . "\n";
    
    echo "Recent Orders:\n";
    if ($customer->getOrders() && $customer->getOrders()->getEdges()) {
        foreach ($customer->getOrders()->getEdges() as $orderEdge) {
            $order = $orderEdge->getNode(); // This is now a strongly-typed Order object
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

