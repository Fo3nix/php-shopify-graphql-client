<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an inventory level.
 */
class ShopifyInventoryLevelInputInputObject extends InputObject
{
    const REQUIRED = ["availableQuantity", "locationId"];

    protected $availableQuantity;
    protected $locationId;

    /**
     * The available quantity of an inventory item at a location.
     */
    public function setAvailableQuantity($availableQuantity): static
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    /**
     * The ID of a location associated with the inventory level.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
