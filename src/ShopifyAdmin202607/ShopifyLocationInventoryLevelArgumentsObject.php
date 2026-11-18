<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyLocationInventoryLevelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["inventoryItemId"];

    protected $inventoryItemId;
    protected $includeInactive;

    /**
     * The ID of the inventory item to obtain the inventory level for.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * Whether to return the inventory level if it is inactive.
     */
    public function setIncludeInactive($includeInactive): static
    {
        $this->includeInactive = $includeInactive;

        return $this;
    }
}
