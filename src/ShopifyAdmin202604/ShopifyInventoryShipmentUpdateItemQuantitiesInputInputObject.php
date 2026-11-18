<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a line item on an inventory shipment.
 */
class ShopifyInventoryShipmentUpdateItemQuantitiesInputInputObject extends InputObject
{
    const REQUIRED = ["shipmentLineItemId", "quantity"];

    protected $shipmentLineItemId;
    protected $quantity;

    /**
     * The ID for the inventory shipment line item.
     */
    public function setShipmentLineItemId($shipmentLineItemId): static
    {
        $this->shipmentLineItemId = $shipmentLineItemId;

        return $this;
    }

    /**
     * The quantity for the shipment line item.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
