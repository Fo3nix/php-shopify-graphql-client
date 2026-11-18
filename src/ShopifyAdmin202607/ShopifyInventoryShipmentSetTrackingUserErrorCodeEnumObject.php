<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryShipmentSetTrackingUserError`.
 */
class ShopifyInventoryShipmentSetTrackingUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The URL is invalid.
     */
    const INVALID_URL = "INVALID_URL";
    /**
     * The shipment was not found.
     */
    const SHIPMENT_NOT_FOUND = "SHIPMENT_NOT_FOUND";
}
