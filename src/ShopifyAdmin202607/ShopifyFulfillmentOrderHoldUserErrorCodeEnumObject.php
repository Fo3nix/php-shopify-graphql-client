<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderHoldUserError`.
 */
class ShopifyFulfillmentOrderHoldUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The fulfillment order could not be found.
     */
    const FULFILLMENT_ORDER_NOT_FOUND = "FULFILLMENT_ORDER_NOT_FOUND";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The fulfillment order line item quantity must be greater than 0.
     */
    const GREATER_THAN_ZERO = "GREATER_THAN_ZERO";
    /**
     * The maximum number of fulfillment holds for this fulfillment order has been reached for this app. An app can only have up to 10 holds on a single fulfillment order at any one time.
     */
    const FULFILLMENT_ORDER_HOLD_LIMIT_REACHED = "FULFILLMENT_ORDER_HOLD_LIMIT_REACHED";
    /**
     * The handle provided for the fulfillment hold is already in use by this app for another hold on this fulfillment order.
     */
    const DUPLICATE_FULFILLMENT_HOLD_HANDLE = "DUPLICATE_FULFILLMENT_HOLD_HANDLE";
    /**
     * The fulfillment order line item quantity is invalid.
     */
    const INVALID_LINE_ITEM_QUANTITY = "INVALID_LINE_ITEM_QUANTITY";
    /**
     * The fulfillment order is not in a splittable state.
     */
    const FULFILLMENT_ORDER_NOT_SPLITTABLE = "FULFILLMENT_ORDER_NOT_SPLITTABLE";
    /**
     * The fulfillment order line items are not unique.
     */
    const DUPLICATED_FULFILLMENT_ORDER_LINE_ITEMS = "DUPLICATED_FULFILLMENT_ORDER_LINE_ITEMS";
}
