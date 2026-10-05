<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventorySupplierSnapshotQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventorySupplierSnapshot";

    public function selectSupplierName()
    {
        $this->selectField("supplierName");

        return $this;
    }
}
