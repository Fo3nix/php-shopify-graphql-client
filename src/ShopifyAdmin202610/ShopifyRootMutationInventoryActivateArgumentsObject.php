<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryActivateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["inventoryItemId", "locationId"];

    protected $inventoryItemId;
    protected $locationId;
    protected $available;
    protected $onHand;

    /**
     * The ID of the inventory item to activate.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * The ID of the location of the inventory item being activated.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The initial available quantity of the inventory item being activated at the location.
     */
    public function setAvailable($available): static
    {
        $this->available = $available;

        return $this;
    }

    /**
     * The initial on_hand quantity of the inventory item being activated at the location.
     */
    public function setOnHand($onHand): static
    {
        $this->onHand = $onHand;

        return $this;
    }
}
