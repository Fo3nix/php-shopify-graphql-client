<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the quantity to be set for an inventory item at a location.
 */
class ShopifyInventorySetQuantityInputInputObject extends InputObject
{
    const REQUIRED = ["inventoryItemId", "locationId", "quantity"];

    protected $inventoryItemId;
    protected $locationId;
    protected $quantity;
    protected $changeFromQuantity;

    /**
     * Specifies the inventory item to which the quantity will be set.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * Specifies the location at which the quantity will be set.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The quantity to which the inventory quantity will be set.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The current quantity to be compared against the persisted quantity. For more information, refer to the [Compare and Swap documentation](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#compare-and-swap).
     */
    public function setChangeFromQuantity($changeFromQuantity): static
    {
        $this->changeFromQuantity = $changeFromQuantity;

        return $this;
    }
}
