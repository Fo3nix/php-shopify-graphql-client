<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderReportProgressUserError`.
 */
class ShopifyFulfillmentOrderReportProgressUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The fulfillment order could not be found.
     */
    const FULFILLMENT_ORDER_NOT_FOUND = "FULFILLMENT_ORDER_NOT_FOUND";
    /**
     * The fulfillment order status is invalid.
     */
    const FULFILLMENT_ORDER_STATUS_INVALID = "FULFILLMENT_ORDER_STATUS_INVALID";
    /**
     * The fulfillment order contains picked items.
     */
    const FULFILLMENT_ORDER_CONTAINS_PICKED_ITEMS = "FULFILLMENT_ORDER_CONTAINS_PICKED_ITEMS";
    /**
     * Progress cannot be reported for a fulfillment order with this delivery method.
     */
    const FULFILLMENT_ORDER_INVALID_DELIVERY_METHOD = "FULFILLMENT_ORDER_INVALID_DELIVERY_METHOD";
    /**
     * The fulfillment order is not assigned to the requesting fulfillment service.
     */
    const FULFILLMENT_ORDER_INVALID_FULFILLMENT_SERVICE_OWNERSHIP = "FULFILLMENT_ORDER_INVALID_FULFILLMENT_SERVICE_OWNERSHIP";
    /**
     * The action is not supported for the fulfillment order.
     */
    const FULFILLMENT_ORDER_UNSUPPORTED_ACTION = "FULFILLMENT_ORDER_UNSUPPORTED_ACTION";
    /**
     * Marketplace apps are not eligible to report progress on fulfillment orders.
     */
    const MARKETPLACE_APP_NOT_ELIGIBLE = "MARKETPLACE_APP_NOT_ELIGIBLE";
}
