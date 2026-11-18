<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
 * that you can use in combination with
 * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
 */
class ShopifyDiscountCombinesWithQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCombinesWith";

    /**
     * Whether the discount combines with the
     * [order discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    public function selectOrderDiscounts(): static
    {
        $this->selectField("orderDiscounts");

        return $this;
    }

    /**
     * Whether the discount combines with the
     * [product discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    public function selectProductDiscounts(): static
    {
        $this->selectField("productDiscounts");

        return $this;
    }

    /**
     * Whether the discount combines with the
     * [shipping discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    public function selectShippingDiscounts(): static
    {
        $this->selectField("shippingDiscounts");

        return $this;
    }
}
