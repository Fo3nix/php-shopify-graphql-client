<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible method types that a delivery method can have.
 */
class ShopifyDeliveryMethodTypeEnumObject extends EnumObject
{
    /**
     * The order is shipped.
     */
    const SHIPPING = "SHIPPING";
    /**
     * The order is picked up by the customer.
     */
    const PICK_UP = "PICK_UP";
    /**
     * Non-physical items, no delivery needed.
     */
    const NONE = "NONE";
    /**
     * In-store sale, no delivery needed.
     */
    const RETAIL = "RETAIL";
    /**
     * The order is delivered using a local delivery service.
     */
    const LOCAL = "LOCAL";
    /**
     * The order is delivered to a pickup point.
     */
    const PICKUP_POINT = "PICKUP_POINT";
}
