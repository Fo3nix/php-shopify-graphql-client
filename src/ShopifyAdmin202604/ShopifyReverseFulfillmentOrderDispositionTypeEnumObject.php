<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The final arrangement of an item from a reverse fulfillment order.
 */
class ShopifyReverseFulfillmentOrderDispositionTypeEnumObject extends EnumObject
{
    /**
     * An item that was restocked.
     */
    const RESTOCKED = "RESTOCKED";
    /**
     * An item that requires further processing before being restocked or discarded.
     */
    const PROCESSING_REQUIRED = "PROCESSING_REQUIRED";
    /**
     * An item that wasn't restocked.
     */
    const NOT_RESTOCKED = "NOT_RESTOCKED";
    /**
     * An item that was expected but absent.
     */
    const MISSING = "MISSING";
}
