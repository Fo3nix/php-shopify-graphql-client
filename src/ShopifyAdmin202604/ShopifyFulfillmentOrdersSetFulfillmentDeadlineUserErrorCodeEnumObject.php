<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrdersSetFulfillmentDeadlineUserError`.
 */
class ShopifyFulfillmentOrdersSetFulfillmentDeadlineUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The fulfillment orders could not be found.
     */
    const FULFILLMENT_ORDERS_NOT_FOUND = "FULFILLMENT_ORDERS_NOT_FOUND";
}
