<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Specifies the minimum item quantity required for discount eligibility, helping merchants create volume-based promotions that encourage larger purchases. This threshold applies to qualifying items in the customer's cart.
 *
 * For example, a "Buy 3, Get 10% Off" promotion would set the minimum quantity to 3 items.
 *
 * Learn more about [discount requirements](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountApplication).
 */
class ShopifyDiscountMinimumQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMinimumQuantity";

    /**
     * The minimum quantity of items that's required for the discount to be applied.
     */
    public function selectGreaterThanOrEqualToQuantity(): static
    {
        $this->selectField("greaterThanOrEqualToQuantity");

        return $this;
    }
}
