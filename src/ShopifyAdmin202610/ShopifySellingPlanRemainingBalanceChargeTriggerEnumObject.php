<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * When to capture the payment for the remaining amount due.
 */
class ShopifySellingPlanRemainingBalanceChargeTriggerEnumObject extends EnumObject
{
    /**
     * When there's no remaining balance to be charged after checkout.
     */
    const NO_REMAINING_BALANCE = "NO_REMAINING_BALANCE";
    /**
     * At an exact time defined by the remaining_balance_charge_exact_time field.
     */
    const EXACT_TIME = "EXACT_TIME";
    /**
     * After the duration defined by the remaining_balance_charge_time_after_checkout field.
     */
    const TIME_AFTER_CHECKOUT = "TIME_AFTER_CHECKOUT";
    /**
     * When the order is fulfilled.
     */
    const ON_FULFILLMENT = "ON_FULFILLMENT";
}
