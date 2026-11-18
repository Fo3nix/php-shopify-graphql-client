<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The actions that can be taken on a fulfillment order.
 */
class ShopifyFulfillmentOrderActionEnumObject extends EnumObject
{
    /**
     * Creates a fulfillment for selected line items in the fulfillment order. The corresponding mutation for this action is `fulfillmentCreateV2`.
     */
    const CREATE_FULFILLMENT = "CREATE_FULFILLMENT";
    /**
     * Sends a request for fulfilling selected line items in a fulfillment order to a fulfillment service. The corresponding mutation for this action is `fulfillmentOrderSubmitFulfillmentRequest`.
     */
    const REQUEST_FULFILLMENT = "REQUEST_FULFILLMENT";
    /**
     * Cancels a fulfillment order. The corresponding mutation for this action is `fulfillmentOrderCancel`.
     */
    const CANCEL_FULFILLMENT_ORDER = "CANCEL_FULFILLMENT_ORDER";
    /**
     * Moves a fulfillment order. The corresponding mutation for this action is `fulfillmentOrderMove`.
     */
    const MOVE = "MOVE";
    /**
     * Sends a cancellation request to the fulfillment service of a fulfillment order. The corresponding mutation for this action is `fulfillmentOrderSubmitCancellationRequest`.
     */
    const REQUEST_CANCELLATION = "REQUEST_CANCELLATION";
    /**
     * Marks the fulfillment order as open. The corresponding mutation for this action is `fulfillmentOrderOpen`.
     */
    const MARK_AS_OPEN = "MARK_AS_OPEN";
    /**
     * Releases the fulfillment hold on the fulfillment order. The corresponding mutation for this action is `fulfillmentOrderReleaseHold`.
     */
    const RELEASE_HOLD = "RELEASE_HOLD";
    /**
     * Applies a fulfillment hold on the fulfillment order. The corresponding mutation for this action is `fulfillmentOrderHold`.
     */
    const HOLD = "HOLD";
    /**
     * Opens an external URL to initiate the fulfillment process outside Shopify. This action should be paired with `FulfillmentOrderSupportedAction.externalUrl`.
     */
    const EXTERNAL = "EXTERNAL";
    /**
     * Splits a fulfillment order. The corresponding mutation for this action is `fulfillmentOrderSplit`.
     */
    const SPLIT = "SPLIT";
    /**
     * Merges a fulfillment order. The corresponding mutation for this action is `fulfillmentOrderMerge`.
     */
    const MERGE = "MERGE";
    /**
     * Report the progress of the fulfillment order, marking as in progress if it's not already in progress.
     */
    const REPORT_PROGRESS = "REPORT_PROGRESS";
}
