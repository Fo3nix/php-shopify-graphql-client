<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCashManagementDefaultReasonCodeEnumEnumObject extends EnumObject
{
    const CASH_PICKUP = "CASH_PICKUP";
    const CASH_COUNT = "CASH_COUNT";
    const CHANGE_CORRECTION = "CHANGE_CORRECTION";
    const PETTY_CASH = "PETTY_CASH";
    const TIP_PAYOUT = "TIP_PAYOUT";
    const CASH_PAYOUT = "CASH_PAYOUT";
    const OTHER = "OTHER";
    const AUTO_END_SESSION_LOGOUT = "AUTO_END_SESSION_LOGOUT";
    const AUTO_END_SESSION_LOCATION_CHANGE = "AUTO_END_SESSION_LOCATION_CHANGE";
    const AUTO_START_SESSION_CHECKOUT = "AUTO_START_SESSION_CHECKOUT";
}
