<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to receive an item on an inventory shipment.
 */
class ShopifyInventoryShipmentReceiveItemInputInputObject extends InputObject
{
    const REQUIRED = ["shipmentLineItemId", "quantity", "reason"];

    protected $shipmentLineItemId;
    protected $quantity;
    protected $reason;

    /**
     * The shipment line item ID to be received.
     */
    public function setShipmentLineItemId($shipmentLineItemId): static
    {
        $this->shipmentLineItemId = $shipmentLineItemId;

        return $this;
    }

    /**
     * The quantity for the item to be received.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The reason for received item.
     */
    public function setReason($shopifyInventoryShipmentReceiveLineItemReason): static
    {
        $this->reason = new RawObject($shopifyInventoryShipmentReceiveLineItemReason);

        return $this;
    }
}
