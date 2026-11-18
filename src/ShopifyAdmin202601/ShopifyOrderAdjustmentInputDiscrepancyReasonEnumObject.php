<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Discrepancy reasons for order adjustments.
 */
class ShopifyOrderAdjustmentInputDiscrepancyReasonEnumObject extends EnumObject
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
    const OTHER = "OTHER";
}
