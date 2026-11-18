<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryShipmentUpdateItemQuantitiesUserError`.
 */
class ShopifyInventoryShipmentUpdateItemQuantitiesUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The location selected can't be found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The shipment was not found.
     */
    const SHIPMENT_NOT_FOUND = "SHIPMENT_NOT_FOUND";
    /**
     * The item was not found.
     */
    const ITEM_NOT_FOUND = "ITEM_NOT_FOUND";
    /**
     * The quantity is invalid.
     */
    const INVALID_QUANTITY = "INVALID_QUANTITY";
    /**
     * Current shipment status does not support this operation.
     */
    const INVALID_SHIPMENT_STATUS = "INVALID_SHIPMENT_STATUS";
    /**
     * The location selected is not active.
     */
    const LOCATION_NOT_ACTIVE = "LOCATION_NOT_ACTIVE";
}
