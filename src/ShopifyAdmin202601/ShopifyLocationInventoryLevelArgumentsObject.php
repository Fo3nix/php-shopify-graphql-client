<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyLocationInventoryLevelArgumentsObject extends ArgumentsObject
{
    protected $inventoryItemId;

    public function setInventoryItemId($inventoryItemId)
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }
}
