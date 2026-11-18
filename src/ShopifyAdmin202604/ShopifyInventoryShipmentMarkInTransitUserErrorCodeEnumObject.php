<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryShipmentMarkInTransitUserError`.
 */
class ShopifyInventoryShipmentMarkInTransitUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The shipment was not found.
     */
    const SHIPMENT_NOT_FOUND = "SHIPMENT_NOT_FOUND";
    /**
     * Current shipment status does not support this operation.
     */
    const INVALID_SHIPMENT_STATUS = "INVALID_SHIPMENT_STATUS";
    /**
     * The item was not found.
     */
    const ITEM_NOT_FOUND = "ITEM_NOT_FOUND";
    /**
     * The item is not stocked at the intended location.
     */
    const INVENTORY_STATE_NOT_ACTIVE = "INVENTORY_STATE_NOT_ACTIVE";
    /**
     * The item does not track inventory.
     */
    const UNTRACKED_ITEM = "UNTRACKED_ITEM";
    /**
     * The quantity is invalid.
     */
    const INVALID_QUANTITY = "INVALID_QUANTITY";
    /**
     * The list of line items is empty.
     */
    const ITEMS_EMPTY = "ITEMS_EMPTY";
    /**
     * The location selected is not active.
     */
    const LOCATION_NOT_ACTIVE = "LOCATION_NOT_ACTIVE";
    /**
     * Failed to activate inventory at location.
     */
    const ACTIVATION_FAILED = "ACTIVATION_FAILED";
}
