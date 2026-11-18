<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * How to calculate the parent product variant's price while bulk updating variant relationships.
 */
class ShopifyPriceCalculationTypeEnumObject extends EnumObject
{
    /**
     * The price of the parent will be the sum of the components price times their quantity.
     */
    const COMPONENTS_SUM = "COMPONENTS_SUM";
    /**
     * The price of the parent will be set to the price provided.
     */
    const FIXED = "FIXED";
    /**
     * The price of the parent will not be adjusted.
     */
    const NONE = "NONE";
}
