<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The unit types for subscription cadence.
 */
class ShopifySubscriptionContractCalculationCadenceUnitEnumObject extends EnumObject
{
    /**
     * Daily interval.
     */
    const DAY = "DAY";
    /**
     * Weekly interval.
     */
    const WEEK = "WEEK";
    /**
     * Monthly interval.
     */
    const MONTH = "MONTH";
    /**
     * Yearly interval.
     */
    const YEAR = "YEAR";
}
