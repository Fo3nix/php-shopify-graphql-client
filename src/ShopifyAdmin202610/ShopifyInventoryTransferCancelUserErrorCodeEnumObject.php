<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryTransferCancelUserError`.
 */
class ShopifyInventoryTransferCancelUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Current transfer status does not support this operation.
     */
    const INVALID_TRANSFER_STATUS = "INVALID_TRANSFER_STATUS";
    /**
     * Shipment already exists for the transfer.
     */
    const SHIPMENT_EXISTS = "SHIPMENT_EXISTS";
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
}
