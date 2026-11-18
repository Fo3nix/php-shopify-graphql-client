<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrdersRerouteUserError`.
 */
class ShopifyFulfillmentOrdersRerouteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * No fulfillment order IDs were provided.
     */
    const NO_FULFILLMENT_ORDER_IDS = "NO_FULFILLMENT_ORDER_IDS";
    /**
     * Fulfillment order could not be found.
     */
    const FULFILLMENT_ORDER_NOT_FOUND = "FULFILLMENT_ORDER_NOT_FOUND";
    /**
     * Fulfillment orders are not from the same order.
     */
    const FULFILLMENT_ORDERS_NOT_FROM_THE_SAME_ORDER = "FULFILLMENT_ORDERS_NOT_FROM_THE_SAME_ORDER";
    /**
     * All fulfillment orders must have status and request status compatible with reroutable states.
     */
    const FULFILLMENT_ORDERS_STATE_NOT_SUPPORTED = "FULFILLMENT_ORDERS_STATE_NOT_SUPPORTED";
    /**
     * Cannot reassign location for fulfillment orders.
     */
    const CANNOT_REASSIGN_LOCATION_FOR_FULFILLMENT_ORDERS = "CANNOT_REASSIGN_LOCATION_FOR_FULFILLMENT_ORDERS";
    /**
     * The delivery method type is not supported.
     */
    const DELIVERY_METHOD_TYPE_NOT_SUPPORTED = "DELIVERY_METHOD_TYPE_NOT_SUPPORTED";
    /**
     * This feature is only supported for multi-location shops.
     */
    const SINGLE_LOCATION_SHOP_NOT_SUPPORTED = "SINGLE_LOCATION_SHOP_NOT_SUPPORTED";
    /**
     * Fulfillment orders must belong to the same location.
     */
    const FULFILLMENT_ORDERS_MUST_BELONG_TO_SAME_LOCATION = "FULFILLMENT_ORDERS_MUST_BELONG_TO_SAME_LOCATION";
    /**
     * Cannot move a fulfillment order that has progress reported.
     */
    const CANNOT_MOVE_FULFILLMENT_ORDER_WITH_REPORTED_PROGRESS = "CANNOT_MOVE_FULFILLMENT_ORDER_WITH_REPORTED_PROGRESS";
}
