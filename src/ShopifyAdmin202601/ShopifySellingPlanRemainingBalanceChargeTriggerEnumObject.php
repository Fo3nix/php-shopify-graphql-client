<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifySellingPlanRemainingBalanceChargeTriggerEnumObject extends EnumObject
{
    const NO_REMAINING_BALANCE = "NO_REMAINING_BALANCE";
    const EXACT_TIME = "EXACT_TIME";
    const TIME_AFTER_CHECKOUT = "TIME_AFTER_CHECKOUT";
    const ON_FULFILLMENT = "ON_FULFILLMENT";
}
