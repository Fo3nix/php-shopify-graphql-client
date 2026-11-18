<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of an inventory shipment.
 */
class ShopifyInventoryShipmentStatusEnumObject extends EnumObject
{
    /**
     * The inventory shipment has been created but not yet shipped.
     */
    const DRAFT = "DRAFT";
    /**
     * The inventory shipment is currently in transit.
     */
    const IN_TRANSIT = "IN_TRANSIT";
    /**
     * The inventory shipment has been partially received at the destination.
     */
    const PARTIALLY_RECEIVED = "PARTIALLY_RECEIVED";
    /**
     * The inventory shipment has been completely received at the destination.
     */
    const RECEIVED = "RECEIVED";
    /**
     * Status not included in the current enumeration set.
     */
    const OTHER = "OTHER";
}
