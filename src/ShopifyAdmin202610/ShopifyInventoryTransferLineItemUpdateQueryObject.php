<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an update to a single transfer line item.
 */
class ShopifyInventoryTransferLineItemUpdateQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferLineItemUpdate";

    /**
     * The delta quantity for the transfer line item.
     */
    public function selectDeltaQuantity(): static
    {
        $this->selectField("deltaQuantity");

        return $this;
    }

    /**
     * The inventory item ID for the transfer line item.
     */
    public function selectInventoryItemId(): static
    {
        $this->selectField("inventoryItemId");

        return $this;
    }

    /**
     * The new quantity for the transfer line item.
     */
    public function selectNewQuantity(): static
    {
        $this->selectField("newQuantity");

        return $this;
    }
}
