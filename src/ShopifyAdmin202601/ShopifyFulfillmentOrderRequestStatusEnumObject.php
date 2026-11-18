<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The request status of a fulfillment order.
 */
class ShopifyFulfillmentOrderRequestStatusEnumObject extends EnumObject
{
    /**
     * The initial request status for the newly-created fulfillment orders. This is the only valid
     * request status for fulfillment orders that aren't assigned to a fulfillment service.
     */
    const UNSUBMITTED = "UNSUBMITTED";
    /**
     * The merchant requested fulfillment for this fulfillment order.
     */
    const SUBMITTED = "SUBMITTED";
    /**
     * The fulfillment service accepted the merchant's fulfillment request.
     */
    const ACCEPTED = "ACCEPTED";
    /**
     * The fulfillment service rejected the merchant's fulfillment request.
     */
    const REJECTED = "REJECTED";
    /**
     * The merchant requested a cancellation of the fulfillment request for this fulfillment order.
     */
    const CANCELLATION_REQUESTED = "CANCELLATION_REQUESTED";
    /**
     * The fulfillment service accepted the merchant's fulfillment cancellation request.
     */
    const CANCELLATION_ACCEPTED = "CANCELLATION_ACCEPTED";
    /**
     * The fulfillment service rejected the merchant's fulfillment cancellation request.
     */
    const CANCELLATION_REJECTED = "CANCELLATION_REJECTED";
    /**
     * The fulfillment service closed the fulfillment order without completing it.
     */
    const CLOSED = "CLOSED";
}
