<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a fulfillment order.
 */
class ShopifyFulfillmentOrderStatusEnumObject extends EnumObject
{
    /**
     * The fulfillment order is ready for fulfillment.
     */
    const OPEN = "OPEN";
    /**
     * The fulfillment order is being processed.
     */
    const IN_PROGRESS = "IN_PROGRESS";
    /**
     * The fulfillment order has been cancelled by the merchant.
     */
    const CANCELLED = "CANCELLED";
    /**
     * The fulfillment order cannot be completed as requested.
     */
    const INCOMPLETE = "INCOMPLETE";
    /**
     * The fulfillment order has been completed and closed.
     */
    const CLOSED = "CLOSED";
    /**
     * The fulfillment order is deferred and will be ready for fulfillment after the date and time specified in `fulfill_at`.
     */
    const SCHEDULED = "SCHEDULED";
    /**
     * The fulfillment order is on hold. The fulfillment process can't be initiated until the hold on the fulfillment order is released.
     */
    const ON_HOLD = "ON_HOLD";
}
