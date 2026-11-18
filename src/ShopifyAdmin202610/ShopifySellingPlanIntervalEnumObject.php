<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents valid selling plan interval.
 */
class ShopifySellingPlanIntervalEnumObject extends EnumObject
{
    /**
     * Day interval.
     */
    const DAY = "DAY";
    /**
     * Week interval.
     */
    const WEEK = "WEEK";
    /**
     * Month interval.
     */
    const MONTH = "MONTH";
    /**
     * Year interval.
     */
    const YEAR = "YEAR";
}
