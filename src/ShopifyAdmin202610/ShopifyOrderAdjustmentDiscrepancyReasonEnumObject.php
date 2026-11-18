<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Discrepancy reasons for order adjustments.
 */
class ShopifyOrderAdjustmentDiscrepancyReasonEnumObject extends EnumObject
{
    /**
     * The discrepancy reason is restocking.
     */
    const RESTOCK = "RESTOCK";
    /**
     * The discrepancy reason is damage.
     */
    const DAMAGE = "DAMAGE";
    /**
     * The discrepancy reason is customer.
     */
    const CUSTOMER = "CUSTOMER";
    /**
     * The discrepancy reason is not one of the predefined reasons.
     */
    const REFUND_DISCREPANCY = "REFUND_DISCREPANCY";
    /**
     * The discrepancy reason is balance adjustment.
     */
    const FULL_RETURN_BALANCING_ADJUSTMENT = "FULL_RETURN_BALANCING_ADJUSTMENT";
    /**
     * The discrepancy reason is pending refund.
     */
    const PENDING_REFUND_DISCREPANCY = "PENDING_REFUND_DISCREPANCY";
}
