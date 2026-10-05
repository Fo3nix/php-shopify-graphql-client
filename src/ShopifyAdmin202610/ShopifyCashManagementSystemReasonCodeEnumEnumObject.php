<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCashManagementSystemReasonCodeEnumEnumObject extends EnumObject
{
    const FLOAT_SETUP = "FLOAT_SETUP";
    const CASH_PAYOUT = "CASH_PAYOUT";
    const AUTO_END_SESSION_LOGOUT = "AUTO_END_SESSION_LOGOUT";
    const AUTO_END_SESSION_LOCATION_CHANGE = "AUTO_END_SESSION_LOCATION_CHANGE";
    const AUTO_START_SESSION_CHECKOUT = "AUTO_START_SESSION_CHECKOUT";
}
