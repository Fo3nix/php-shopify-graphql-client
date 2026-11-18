<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryDeactivateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["inventoryLevelId"];

    protected $inventoryLevelId;

    /**
     * The ID of the inventory level to deactivate.
     */
    public function setInventoryLevelId($inventoryLevelId): static
    {
        $this->inventoryLevelId = $inventoryLevelId;

        return $this;
    }
}
