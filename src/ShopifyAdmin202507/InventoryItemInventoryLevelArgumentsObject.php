<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class InventoryItemInventoryLevelArgumentsObject extends ArgumentsObject
{
    protected $locationId;

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }
}
