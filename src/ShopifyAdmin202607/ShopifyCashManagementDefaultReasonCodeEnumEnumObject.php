<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Default reason codes for cash management.
 */
class ShopifyCashManagementDefaultReasonCodeEnumEnumObject extends EnumObject
{
    /**
     * Cash pickup.
     */
    const CASH_PICKUP = "CASH_PICKUP";
    /**
     * Cash count.
     */
    const CASH_COUNT = "CASH_COUNT";
    /**
     * Change correction.
     */
    const CHANGE_CORRECTION = "CHANGE_CORRECTION";
    /**
     * Petty cash.
     */
    const PETTY_CASH = "PETTY_CASH";
    /**
     * Tip payout.
     */
    const TIP_PAYOUT = "TIP_PAYOUT";
    /**
     * Cash payout.
     */
    const CASH_PAYOUT = "CASH_PAYOUT";
    /**
     * Other.
     */
    const OTHER = "OTHER";
    /**
     * Point of sale device payment session was automatically closed because a staff member logged out.
     */
    const AUTO_END_SESSION_LOGOUT = "AUTO_END_SESSION_LOGOUT";
    /**
     * Point of sale device payment session was automatically closed because the device switched to a different location.
     */
    const AUTO_END_SESSION_LOCATION_CHANGE = "AUTO_END_SESSION_LOCATION_CHANGE";
    /**
     * Point of sale device payment session was automatically opened by a cash payment at checkout.
     */
    const AUTO_START_SESSION_CHECKOUT = "AUTO_START_SESSION_CHECKOUT";
}
