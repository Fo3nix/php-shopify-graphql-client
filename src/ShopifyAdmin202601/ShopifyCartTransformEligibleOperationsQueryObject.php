<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Controls which cart transformation operations apps can perform in your store. This lets you define exactly what types of cart modifications are allowed based on your checkout setup and business needs.
 *
 * The eligible operations determine what cart transform functions can accomplish, providing a clear boundary for app capabilities within the store's ecosystem.
 *
 * Learn more about [cart transform operations](https://shopify.dev/docs/api/functions/latest/cart-transform#multiple-operations).
 */
class ShopifyCartTransformEligibleOperationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformEligibleOperations";

    /**
     * The shop is eligible for expand operations.
     */
    public function selectExpandOperation(): static
    {
        $this->selectField("expandOperation");

        return $this;
    }

    /**
     * The shop is eligible for merge operations.
     */
    public function selectMergeOperation(): static
    {
        $this->selectField("mergeOperation");

        return $this;
    }

    /**
     * The shop is eligible for update operations.
     */
    public function selectUpdateOperation(): static
    {
        $this->selectField("updateOperation");

        return $this;
    }
}
