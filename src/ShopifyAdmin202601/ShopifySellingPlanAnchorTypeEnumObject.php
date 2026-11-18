<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the anchor type.
 */
class ShopifySellingPlanAnchorTypeEnumObject extends EnumObject
{
    /**
     * Which day of the week, between 1-7.
     */
    const WEEKDAY = "WEEKDAY";
    /**
     * Which day of the month, between 1-31.
     */
    const MONTHDAY = "MONTHDAY";
    /**
     * Which days of the month and year, month between 1-12, and day between 1-31.
     */
    const YEARDAY = "YEARDAY";
}
