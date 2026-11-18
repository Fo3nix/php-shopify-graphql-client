<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * System reason codes for cash management.
 */
class ShopifyCashManagementSystemReasonCodeEnumEnumObject extends EnumObject
{
    /**
     * Float setup.
     */
    const FLOAT_SETUP = "FLOAT_SETUP";
    /**
     * Cash payout.
     */
    const CASH_PAYOUT = "CASH_PAYOUT";
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
