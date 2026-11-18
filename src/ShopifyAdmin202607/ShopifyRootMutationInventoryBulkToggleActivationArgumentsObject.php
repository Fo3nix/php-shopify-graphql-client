<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryBulkToggleActivationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["inventoryItemId", "inventoryItemUpdates"];

    protected $inventoryItemId;
    protected $inventoryItemUpdates;

    /**
     * The ID of the inventory item to modify the activation status locations for.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * A list of pairs of locations and activate status to update for the specified inventory item.
     */
    public function setInventoryItemUpdates(array $inventoryItemUpdates): static
    {
        $this->inventoryItemUpdates = $inventoryItemUpdates;

        return $this;
    }
}
