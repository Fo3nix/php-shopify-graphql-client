<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible source types for a balance transaction.
 */
class ShopifyShopifyPaymentsSourceTypeEnumObject extends EnumObject
{
    /**
     * The adjustment_reversal source type.
     */
    const ADJUSTMENT_REVERSAL = "ADJUSTMENT_REVERSAL";
    /**
     * The charge source type.
     */
    const CHARGE = "CHARGE";
    /**
     * The refund source type.
     */
    const REFUND = "REFUND";
    /**
     * The system_adjustment source type.
     */
    const SYSTEM_ADJUSTMENT = "SYSTEM_ADJUSTMENT";
    /**
     * The dispute source type.
     */
    const DISPUTE = "DISPUTE";
    /**
     * The adjustment source type.
     */
    const ADJUSTMENT = "ADJUSTMENT";
    /**
     * The transfer source type.
     */
    const TRANSFER = "TRANSFER";
}
