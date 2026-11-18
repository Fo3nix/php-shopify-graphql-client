<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines a quantity threshold for discount eligibility or application. This simple object specifies the number of items required to trigger or calculate discount benefits.
 *
 * For example, a "Buy 3, Get 1 Free" promotion would use DiscountQuantity to define the minimum purchase quantity of 3 items, or a bulk discount might specify quantity tiers like 10+ items for wholesale pricing.
 *
 * The quantity value determines how discounts interact with cart contents, whether setting minimum purchase requirements or defining quantity-based discount calculations.
 */
class ShopifyDiscountQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountQuantity";

    /**
     * The quantity of items.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }
}
