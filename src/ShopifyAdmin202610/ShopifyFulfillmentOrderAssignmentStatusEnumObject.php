<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The assignment status to be used to filter fulfillment orders.
 */
class ShopifyFulfillmentOrderAssignmentStatusEnumObject extends EnumObject
{
    /**
     * Fulfillment orders for which the merchant has requested cancellation of
     * the previously accepted fulfillment request.
     */
    const CANCELLATION_REQUESTED = "CANCELLATION_REQUESTED";
    /**
     * Fulfillment orders for which the merchant has requested fulfillment.
     */
    const FULFILLMENT_REQUESTED = "FULFILLMENT_REQUESTED";
    /**
     * Fulfillment orders for which the merchant's fulfillment request has been accepted.
     * Any number of fulfillments can be created on these fulfillment orders
     * to completely fulfill the requested items.
     */
    const FULFILLMENT_ACCEPTED = "FULFILLMENT_ACCEPTED";
    /**
     * Fulfillment orders for which the merchant hasn't yet requested fulfillment.
     */
    const FULFILLMENT_UNSUBMITTED = "FULFILLMENT_UNSUBMITTED";
}
