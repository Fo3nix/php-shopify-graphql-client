<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyInventoryItemInventoryLevelArgumentsObject extends ArgumentsObject
{
    protected $locationId;
    protected $includeInactive;

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    public function setIncludeInactive($includeInactive)
    {
        $this->includeInactive = $includeInactive;

        return $this;
    }
}
