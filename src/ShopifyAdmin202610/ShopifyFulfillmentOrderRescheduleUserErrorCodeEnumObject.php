<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderRescheduleUserError`.
 */
class ShopifyFulfillmentOrderRescheduleUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Fulfillment order could not be found.
     */
    const FULFILLMENT_ORDER_NOT_FOUND = "FULFILLMENT_ORDER_NOT_FOUND";
}
