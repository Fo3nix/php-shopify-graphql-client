<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to add a shipment.
 */
class ShopifyInventoryShipmentCreateInputInputObject extends InputObject
{
    const REQUIRED = ["movementId", "lineItems"];

    protected $movementId;
    protected $trackingInput;
    protected $lineItems;
    protected $dateCreated;
    protected $barcode;

    /**
     * The ID of the inventory movement (transfer or purchase order) this shipment belongs to.
     */
    public function setMovementId($movementId): static
    {
        $this->movementId = $movementId;

        return $this;
    }

    /**
     * The tracking information for the shipment.
     */
    public function setTrackingInput(ShopifyInventoryShipmentTrackingInputInputObject $shopifyInventoryShipmentTrackingInputInputObject): static
    {
        $this->trackingInput = $shopifyInventoryShipmentTrackingInputInputObject;

        return $this;
    }

    /**
     * The list of line items for the inventory shipment.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * The date the shipment was created.
     */
    public function setDateCreated($dateCreated): static
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * A unique barcode for the shipment.
     */
    public function setBarcode($barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }
}
