<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of adjustment activity.
 */
class ShopifyCashAdjustmentActivityTypeEnumObject extends EnumObject
{
    /**
     * A manual cash adjustment.
     */
    const ADJUSTMENT = "ADJUSTMENT";
    /**
     * A cash payout, such as a gift card cash out.
     */
    const CASH_PAYOUT = "CASH_PAYOUT";
    /**
     * A closing adjustment.
     */
    const CLOSING_ADJUSTMENT = "CLOSING_ADJUSTMENT";
}
