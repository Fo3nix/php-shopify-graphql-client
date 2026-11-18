<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyInventoryItemInventoryLevelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId"];

    protected $locationId;
    protected $includeInactive;

    /**
     * ID of the location for which the inventory level is requested.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

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
