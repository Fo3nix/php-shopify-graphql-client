<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyLocationInventoryLevelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["inventoryItemId"];

    protected $inventoryItemId;

    /**
     * The ID of the inventory item to obtain the inventory level for.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }
}
