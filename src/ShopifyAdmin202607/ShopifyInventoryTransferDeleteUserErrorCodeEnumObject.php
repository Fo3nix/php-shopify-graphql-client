<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryTransferDeleteUserError`.
 */
class ShopifyInventoryTransferDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * A resource was not in the correct state for the operation to succeed.
     */
    const INVALID_STATE = "INVALID_STATE";
    /**
     * Current transfer status does not support this operation.
     */
    const INVALID_TRANSFER_STATUS = "INVALID_TRANSFER_STATUS";
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
}
