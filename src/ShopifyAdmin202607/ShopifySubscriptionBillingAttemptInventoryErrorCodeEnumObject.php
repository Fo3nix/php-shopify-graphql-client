<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Error codes for inventory-related billing attempt failures.
 */
class ShopifySubscriptionBillingAttemptInventoryErrorCodeEnumObject extends EnumObject
{
    /**
     * Insufficient inventory.
     */
    const INSUFFICIENT_INVENTORY = "INSUFFICIENT_INVENTORY";
    /**
     * No inventory location found or enabled.
     */
    const INVENTORY_ALLOCATIONS_NOT_FOUND = "INVENTORY_ALLOCATIONS_NOT_FOUND";
}
