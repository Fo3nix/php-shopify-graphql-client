<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryShipmentSetBarcodeUserError`.
 */
class ShopifyInventoryShipmentSetBarcodeUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The shipment was not found.
     */
    const SHIPMENT_NOT_FOUND = "SHIPMENT_NOT_FOUND";
    /**
     * This barcode is already assigned to another shipment.
     */
    const BARCODE_DUPLICATE = "BARCODE_DUPLICATE";
    /**
     * Barcode must be 255 characters or less.
     */
    const BARCODE_TOO_LONG = "BARCODE_TOO_LONG";
}
