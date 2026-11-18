<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderCancelError`.
 */
class ShopifyFulfillmentOrderCancelErrorCodeEnumObject extends EnumObject
{
    /**
     * Cannot cancel fulfillment order with reported progress. Mark as unfulfilled first.
     */
    const FULFILLMENT_ORDER_HAS_MANUALLY_REPORTED_PROGRESS = "FULFILLMENT_ORDER_HAS_MANUALLY_REPORTED_PROGRESS";
}
