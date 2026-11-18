<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of payments associated with the order. Can only be set when the order is created.
 */
class ShopifyOrderCreateFinancialStatusEnumObject extends EnumObject
{
    /**
     * The payments are pending. Payment might fail in this state. Check again to confirm whether the payments have been paid successfully.
     */
    const PENDING = "PENDING";
    /**
     * The payments have been authorized.
     */
    const AUTHORIZED = "AUTHORIZED";
    /**
     * The order has been partially paid.
     */
    const PARTIALLY_PAID = "PARTIALLY_PAID";
    /**
     * The payments have been paid.
     */
    const PAID = "PAID";
    /**
     * The payments have been partially refunded.
     */
    const PARTIALLY_REFUNDED = "PARTIALLY_REFUNDED";
    /**
     * The payments have been refunded.
     */
    const REFUNDED = "REFUNDED";
    /**
     * The payments have been voided.
     */
    const VOIDED = "VOIDED";
    /**
     * The payments have been expired.
     */
    const EXPIRED = "EXPIRED";
}
