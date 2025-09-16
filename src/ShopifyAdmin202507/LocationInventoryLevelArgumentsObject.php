<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class LocationInventoryLevelArgumentsObject extends ArgumentsObject
{
    protected $inventoryItemId;

    public function setInventoryItemId($inventoryItemId)
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }
}
