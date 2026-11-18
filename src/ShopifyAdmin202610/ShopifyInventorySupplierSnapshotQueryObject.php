<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a snapshot of the supplier where a purchase order originates from.
 */
class ShopifyInventorySupplierSnapshotQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventorySupplierSnapshot";

    /**
     * The name of the supplier as it was when the purchase order was created.
     */
    public function selectSupplierName(): static
    {
        $this->selectField("supplierName");

        return $this;
    }
}
