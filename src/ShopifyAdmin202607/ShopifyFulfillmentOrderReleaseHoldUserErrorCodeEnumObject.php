<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderReleaseHoldUserError`.
 */
class ShopifyFulfillmentOrderReleaseHoldUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The fulfillment order wasn't found.
     */
    const FULFILLMENT_ORDER_NOT_FOUND = "FULFILLMENT_ORDER_NOT_FOUND";
    /**
     * The app doesn't have access to release the fulfillment hold.
     */
    const INVALID_ACCESS = "INVALID_ACCESS";
}
