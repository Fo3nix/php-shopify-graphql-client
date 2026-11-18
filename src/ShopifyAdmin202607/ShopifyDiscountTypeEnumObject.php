<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of the subscription discount.
 */
class ShopifyDiscountTypeEnumObject extends EnumObject
{
    /**
     * Manual discount type.
     */
    const MANUAL = "MANUAL";
    /**
     * Code discount type.
     */
    const CODE_DISCOUNT = "CODE_DISCOUNT";
    /**
     * Automatic discount type.
     */
    const AUTOMATIC_DISCOUNT = "AUTOMATIC_DISCOUNT";
}
