<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
 * that's used to control how discounts can be combined.
 */
class ShopifyDiscountClassEnumObject extends EnumObject
{
    /**
     * The discount is combined with a
     * [product discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    const PRODUCT = "PRODUCT";
    /**
     * The discount is combined with an
     * [order discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    const ORDER = "ORDER";
    /**
     * The discount is combined with a
     * [shipping discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    const SHIPPING = "SHIPPING";
}
