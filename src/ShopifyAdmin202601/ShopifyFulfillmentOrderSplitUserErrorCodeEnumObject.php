<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderSplitUserError`.
 */
class ShopifyFulfillmentOrderSplitUserErrorCodeEnumObject extends EnumObject
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
    /**
     * The fulfillment order must have at least one line item input to split.
     */
    const NO_LINE_ITEMS_PROVIDED_TO_SPLIT = "NO_LINE_ITEMS_PROVIDED_TO_SPLIT";
}
