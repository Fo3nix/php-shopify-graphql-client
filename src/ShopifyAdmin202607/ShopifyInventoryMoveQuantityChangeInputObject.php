<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * Represents the change to be made to an inventory item at a location.
 * The change can either involve the same quantity name between different locations,
 * or involve different quantity names between the same location.
 */
class ShopifyInventoryMoveQuantityChangeInputObject extends InputObject
{
    const REQUIRED = ["inventoryItemId", "quantity", "from", "to"];

    protected $inventoryItemId;
    protected $quantity;
    protected $from;
    protected $to;

    /**
     * Specifies the inventory item to which the change will be applied.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * The amount by which the inventory quantity will be changed.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Details about where the move will be made from.
     */
    public function setFrom(ShopifyInventoryMoveQuantityTerminalInputInputObject $shopifyInventoryMoveQuantityTerminalInputInputObject): static
    {
        $this->from = $shopifyInventoryMoveQuantityTerminalInputInputObject;

        return $this;
    }

    /**
     * Details about where the move will be made to.
     */
    public function setTo(ShopifyInventoryMoveQuantityTerminalInputInputObject $shopifyInventoryMoveQuantityTerminalInputInputObject): static
    {
        $this->to = $shopifyInventoryMoveQuantityTerminalInputInputObject;

        return $this;
    }
}
