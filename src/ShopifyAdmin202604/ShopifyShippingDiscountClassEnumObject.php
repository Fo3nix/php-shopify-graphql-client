<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
 * that's used to control how discounts can be combined.
 */
class ShopifyShippingDiscountClassEnumObject extends EnumObject
{
    /**
     * Combined as a shipping discount.
     */
    const SHIPPING = "SHIPPING";
}
