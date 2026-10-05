<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyLocationInventoryLevelArgumentsObject extends ArgumentsObject
{
    protected $inventoryItemId;
    protected $includeInactive;

    public function setInventoryItemId($inventoryItemId)
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    public function setIncludeInactive($includeInactive)
    {
        $this->includeInactive = $includeInactive;

        return $this;
    }
}
