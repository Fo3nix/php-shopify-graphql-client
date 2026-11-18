<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryShipmentSetBarcodeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "barcode"];

    protected $id;
    protected $barcode;

    /**
     * The ID of the inventory shipment to set the barcode on.
     */
    public function setId($id): static
    {
        $this->id = $id;

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
