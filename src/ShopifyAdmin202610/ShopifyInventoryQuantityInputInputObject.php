<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the quantity to be set for an inventory item at a location.
 */
class ShopifyInventoryQuantityInputInputObject extends InputObject
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
     * The quantity currently expected at this location, before setting the new quantity.
     *
     * This field enables a compare-and-swap (CAS) safety check. If the location’s current quantity doesn't match the value you provide, then the mutation fails with a `CHANGE_FROM_QUANTITY_STALE` error. This helps prevent unintended overwrites when the request is based on stale inventory data.
     *
     * To skip the CAS check, pass `null`. Use this only when your system is the source of truth for this inventory and you don’t need to protect against concurrent updates.
     * This field is mandatory: you must explicitly pass in a value, even if that value is `null`, or the mutation returns an error.
     *
     * For more information, refer to the [compare and swap documentation](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#compare-and-swap).
     */
    public function setChangeFromQuantity($changeFromQuantity): static
    {
        $this->changeFromQuantity = $changeFromQuantity;

        return $this;
    }
}
