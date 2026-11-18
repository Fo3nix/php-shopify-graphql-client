<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryShipmentDeleteUserError`.
 */
class ShopifyInventoryShipmentDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Current shipment status does not support this operation.
     */
    const INVALID_SHIPMENT_STATUS = "INVALID_SHIPMENT_STATUS";
    /**
     * The shipment was not found.
     */
    const SHIPMENT_NOT_FOUND = "SHIPMENT_NOT_FOUND";
}
