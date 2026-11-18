<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderMergeUserError`.
 */
class ShopifyFulfillmentOrderMergeUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The fulfillment order could not be found.
     */
    const FULFILLMENT_ORDER_NOT_FOUND = "FULFILLMENT_ORDER_NOT_FOUND";
    /**
     * The fulfillment order line item quantity must be greater than 0.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The fulfillment order line item quantity is invalid.
     */
    const INVALID_LINE_ITEM_QUANTITY = "INVALID_LINE_ITEM_QUANTITY";
}
