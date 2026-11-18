<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of an order's eligibility for protection against fraudulent chargebacks by Shopify Protect.
 */
class ShopifyShopifyProtectEligibilityStatusEnumObject extends EnumObject
{
    /**
     * The eligibility of the order is pending and has not yet been determined.
     */
    const PENDING = "PENDING";
    /**
     * The order is eligible for protection against fraudulent chargebacks.
     * If an order is updated, the order's eligibility may change and protection could be removed.
     */
    const ELIGIBLE = "ELIGIBLE";
    /**
     * The order isn't eligible for protection against fraudulent chargebacks.
     */
    const NOT_ELIGIBLE = "NOT_ELIGIBLE";
}
