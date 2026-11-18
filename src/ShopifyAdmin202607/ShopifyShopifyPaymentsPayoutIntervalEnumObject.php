<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The interval at which payouts are sent to the connected bank account.
 */
class ShopifyShopifyPaymentsPayoutIntervalEnumObject extends EnumObject
{
    /**
     * Each business day.
     */
    const DAILY = "DAILY";
    /**
     * Each week, on the day of week specified by weeklyAnchor.
     */
    const WEEKLY = "WEEKLY";
    /**
     * Each month, on the day of month specified by monthlyAnchor.
     */
    const MONTHLY = "MONTHLY";
    /**
     * Payouts will not be automatically made.
     */
    const MANUAL = "MANUAL";
}
