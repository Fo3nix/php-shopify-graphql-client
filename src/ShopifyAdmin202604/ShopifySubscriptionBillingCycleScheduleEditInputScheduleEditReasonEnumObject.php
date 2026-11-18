<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The input fields for possible reasons for editing the billing cycle's schedule.
 */
class ShopifySubscriptionBillingCycleScheduleEditInputScheduleEditReasonEnumObject extends EnumObject
{
    /**
     * Buyer initiated the schedule edit.
     */
    const BUYER_INITIATED = "BUYER_INITIATED";
    /**
     * Merchant initiated the schedule edit.
     */
    const MERCHANT_INITIATED = "MERCHANT_INITIATED";
    /**
     * Developer initiated the schedule edit.
     */
    const DEV_INITIATED = "DEV_INITIATED";
}
