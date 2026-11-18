<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of an order's protection with Shopify Protect.
 */
class ShopifyShopifyProtectStatusEnumObject extends EnumObject
{
    /**
     * The protection for the order is pending and has not yet been determined.
     */
    const PENDING = "PENDING";
    /**
     * The protection for the order is active and eligible for reimbursement against fraudulent chargebacks.
     * If an order is updated, the order's eligibility may change and protection could become inactive.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The protection for an order isn't active because the order didn't meet eligibility requirements.
     */
    const INACTIVE = "INACTIVE";
    /**
     * The order received a fraudulent chargeback and it was protected.
     */
    const PROTECTED = "PROTECTED";
    /**
     * The order received a chargeback but the order wasn't protected because it didn't meet coverage requirements.
     */
    const NOT_PROTECTED = "NOT_PROTECTED";
}
