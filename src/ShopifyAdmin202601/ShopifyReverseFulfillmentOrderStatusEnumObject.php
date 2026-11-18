<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a reverse fulfillment order.
 */
class ShopifyReverseFulfillmentOrderStatusEnumObject extends EnumObject
{
    /**
     * The reverse fulfillment order has been canceled.
     */
    const CANCELED = "CANCELED";
    /**
     * The reverse fulfillment order has been completed.
     */
    const CLOSED = "CLOSED";
    /**
     * The reverse fulfillment order is in progress.
     */
    const OPEN = "OPEN";
}
