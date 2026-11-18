<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the reason for the order's cancellation.
 */
class ShopifyOrderCancelReasonEnumObject extends EnumObject
{
    /**
     * The customer wanted to cancel the order.
     */
    const CUSTOMER = "CUSTOMER";
    /**
     * Payment was declined.
     */
    const DECLINED = "DECLINED";
    /**
     * The order was fraudulent.
     */
    const FRAUD = "FRAUD";
    /**
     * There was insufficient inventory.
     */
    const INVENTORY = "INVENTORY";
    /**
     * Staff made an error.
     */
    const STAFF = "STAFF";
    /**
     * The order was canceled for an unlisted reason.
     */
    const OTHER = "OTHER";
}
