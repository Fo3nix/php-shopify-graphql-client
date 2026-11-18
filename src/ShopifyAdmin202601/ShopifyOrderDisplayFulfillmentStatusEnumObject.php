<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the order's aggregated fulfillment status for display purposes.
 */
class ShopifyOrderDisplayFulfillmentStatusEnumObject extends EnumObject
{
    /**
     * Displayed as **Unfulfilled**. None of the items in the order have been fulfilled.
     */
    const UNFULFILLED = "UNFULFILLED";
    /**
     * Displayed as **Partially fulfilled**. Some of the items in the order have been fulfilled.
     */
    const PARTIALLY_FULFILLED = "PARTIALLY_FULFILLED";
    /**
     * Displayed as **Fulfilled**. All the items in the order have been fulfilled.
     */
    const FULFILLED = "FULFILLED";
    /**
     * Displayed as **Restocked**. All the items in the order have been restocked. Replaced by the "UNFULFILLED" status.
     */
    const RESTOCKED = "RESTOCKED";
    /**
     * Displayed as **Pending fulfillment**. A request for fulfillment of some items awaits a response from the fulfillment service. Replaced by the "IN_PROGRESS" status.
     */
    const PENDING_FULFILLMENT = "PENDING_FULFILLMENT";
    /**
     * Displayed as **Open**. None of the items in the order have been fulfilled. Replaced by "UNFULFILLED" status.
     */
    const OPEN = "OPEN";
    /**
     * Displayed as **In progress**. All of the items in the order have had a request for fulfillment sent to the fulfillment service or all of the items have been marked as in progress.
     */
    const IN_PROGRESS = "IN_PROGRESS";
    /**
     * Displayed as **On hold**. All of the unfulfilled items in this order are on hold.
     */
    const ON_HOLD = "ON_HOLD";
    /**
     * Displayed as **Scheduled**. All of the unfulfilled items in this order are scheduled for fulfillment at later time.
     */
    const SCHEDULED = "SCHEDULED";
    /**
     * Displayed as **Request declined**. Some of the items in the order have been rejected for fulfillment by the fulfillment service.
     */
    const REQUEST_DECLINED = "REQUEST_DECLINED";
}
