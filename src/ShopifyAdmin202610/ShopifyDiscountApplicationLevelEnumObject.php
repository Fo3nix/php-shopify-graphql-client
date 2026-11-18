<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The level at which the discount's value is applied.
 */
class ShopifyDiscountApplicationLevelEnumObject extends EnumObject
{
    /**
     * The discount is applied at the order level.
     * Order level discounts are not factored into the discountedUnitPriceSet on line items.
     */
    const ORDER = "ORDER";
    /**
     * The discount is applied at the line level.
     * Line level discounts are factored into the discountedUnitPriceSet on line items.
     */
    const LINE = "LINE";
}
