<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents a percentage price adjustment type.
 */
class ShopifyPriceListAdjustmentTypeEnumObject extends EnumObject
{
    /**
     * Percentage decrease type. Prices will have a lower value.
     */
    const PERCENTAGE_DECREASE = "PERCENTAGE_DECREASE";
    /**
     * Percentage increase type. Prices will have a higher value.
     */
    const PERCENTAGE_INCREASE = "PERCENTAGE_INCREASE";
}
