<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a shipping label purchase result.
 */
class ShopifyShippingLabelPurchaseResultStatusEnumObject extends EnumObject
{
    /**
     * Purchase is pending.
     */
    const PENDING_PURCHASE = "PENDING_PURCHASE";
    /**
     * Purchase failed.
     */
    const PURCHASE_FAILED = "PURCHASE_FAILED";
    /**
     * Purchase succeeded.
     */
    const PURCHASED = "PURCHASED";
}
