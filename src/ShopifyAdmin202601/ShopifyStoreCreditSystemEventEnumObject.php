<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The event that caused the store credit account transaction.
 */
class ShopifyStoreCreditSystemEventEnumObject extends EnumObject
{
    /**
     * An adjustment was made to the store credit account.
     */
    const ADJUSTMENT = "ADJUSTMENT";
    /**
     * Store credit was used as payment for an order.
     */
    const ORDER_PAYMENT = "ORDER_PAYMENT";
    /**
     * Store credit was refunded from an order.
     */
    const ORDER_REFUND = "ORDER_REFUND";
    /**
     * A store credit payment was reverted due to another payment method failing.
     */
    const PAYMENT_FAILURE = "PAYMENT_FAILURE";
    /**
     * A smaller amount of store credit was captured than was originally authorized.
     */
    const PAYMENT_RETURNED = "PAYMENT_RETURNED";
    /**
     * Store credit was returned when an authorized payment was voided.
     */
    const ORDER_CANCELLATION = "ORDER_CANCELLATION";
    /**
     * Tax finalization affected the store credit payment.
     */
    const TAX_FINALIZATION = "TAX_FINALIZATION";
    /**
     * Store credit was used as payment for a recurring order.
     */
    const RECURRING_PAYMENT = "RECURRING_PAYMENT";
}
