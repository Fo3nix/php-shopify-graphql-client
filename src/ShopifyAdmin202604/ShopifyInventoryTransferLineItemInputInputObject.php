<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a line item on an inventory transfer.
 */
class ShopifyInventoryTransferLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["inventoryItemId", "quantity"];

    protected $inventoryItemId;
    protected $quantity;

    /**
     * The inventory item ID for the transfer line item.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * The quantity for the transfer line item.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
