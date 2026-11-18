<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryTransferMarkAsReadyToShipUserError`.
 */
class ShopifyInventoryTransferMarkAsReadyToShipUserErrorCodeEnumObject extends EnumObject
{
    /**
     * One or more items are not valid.
     */
    const INVALID_ITEM = "INVALID_ITEM";
    /**
     * Current transfer status does not support this operation.
     */
    const INVALID_TRANSFER_STATUS = "INVALID_TRANSFER_STATUS";
    /**
     * The list of line items is empty.
     */
    const ITEMS_EMPTY = "ITEMS_EMPTY";
    /**
     * The location selected is not active.
     */
    const LOCATION_NOT_ACTIVE = "LOCATION_NOT_ACTIVE";
    /**
     * The location selected can't be found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * A location is required for this operation.
     */
    const LOCATION_REQUIRED = "LOCATION_REQUIRED";
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
}
