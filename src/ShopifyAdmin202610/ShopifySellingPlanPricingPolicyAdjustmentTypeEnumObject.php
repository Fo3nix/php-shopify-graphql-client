<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents a selling plan pricing policy adjustment type.
 */
class ShopifySellingPlanPricingPolicyAdjustmentTypeEnumObject extends EnumObject
{
    /**
     * Percentage off adjustment.
     */
    const PERCENTAGE = "PERCENTAGE";
    /**
     * Fixed amount off adjustment.
     */
    const FIXED_AMOUNT = "FIXED_AMOUNT";
    /**
     * Price of the policy.
     */
    const PRICE = "PRICE";
}
