<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The reason for receiving a line item on an inventory shipment.
 */
class ShopifyInventoryShipmentReceiveLineItemReasonEnumObject extends EnumObject
{
    /**
     * The line item was accepted.
     */
    const ACCEPTED = "ACCEPTED";
    /**
     * The line item was rejected.
     */
    const REJECTED = "REJECTED";
    /**
     * The line item was canceled.
     */
    const CANCELED = "CANCELED";
}
