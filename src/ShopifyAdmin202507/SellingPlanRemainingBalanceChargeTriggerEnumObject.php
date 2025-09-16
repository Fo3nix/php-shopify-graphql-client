<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SellingPlanRemainingBalanceChargeTriggerEnumObject extends EnumObject
{
    const NO_REMAINING_BALANCE = "NO_REMAINING_BALANCE";
    const EXACT_TIME = "EXACT_TIME";
    const TIME_AFTER_CHECKOUT = "TIME_AFTER_CHECKOUT";
}
