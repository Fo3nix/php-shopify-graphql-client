<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The kinds of request merchants can make to a fulfillment service.
 */
class ShopifyFulfillmentOrderMerchantRequestKindEnumObject extends EnumObject
{
    /**
     * The merchant requests fulfillment for an `OPEN` fulfillment order.
     */
    const FULFILLMENT_REQUEST = "FULFILLMENT_REQUEST";
    /**
     * The merchant requests cancellation of an `IN_PROGRESS` fulfillment order.
     */
    const CANCELLATION_REQUEST = "CANCELLATION_REQUEST";
}
