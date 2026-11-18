<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Creates percentage-based discounts that reduce item prices by a specified percentage amount. This gives merchants a flexible way to offer proportional savings that automatically scale with order value.
 *
 * For example, a "20% off all winter clothing" promotion would use this object to apply consistent percentage savings across different price points.
 *
 * Learn more about [discount types](https://help.shopify.com/manual/discounts/).
 */
class ShopifyDiscountPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountPercentage";

    /**
     * The percentage value of the discount.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
