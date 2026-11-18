<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible statuses an inventory purchase order can have.
 */
class ShopifyInventoryPurchaseOrderStatusEnumObject extends EnumObject
{
    /**
     * Purchase order is open and not marked as ordered yet.
     */
    const DRAFT = "DRAFT";
    /**
     * Purchase order is open and marked as ordered.
     */
    const ORDERED = "ORDERED";
}
