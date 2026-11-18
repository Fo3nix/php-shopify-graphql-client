<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a reverse fulfillment order third-party confirmation.
 */
class ShopifyReverseFulfillmentOrderThirdPartyConfirmationStatusEnumObject extends EnumObject
{
    /**
     * The reverse fulfillment order was accepted by the fulfillment service.
     */
    const ACCEPTED = "ACCEPTED";
    /**
     * The reverse fulfillment order cancelation was accepted by the fulfillment service.
     */
    const CANCEL_ACCEPTED = "CANCEL_ACCEPTED";
    /**
     * The reverse fulfillment order cancelation was rejected by the fulfillment service.
     */
    const CANCEL_REJECTED = "CANCEL_REJECTED";
    /**
     * The reverse fulfillment order is awaiting acceptance by the fulfillment service.
     */
    const PENDING_ACCEPTANCE = "PENDING_ACCEPTANCE";
    /**
     * The reverse fulfillment order is awaiting cancelation by the fulfillment service.
     */
    const PENDING_CANCELATION = "PENDING_CANCELATION";
    /**
     * The reverse fulfillment order was rejected by the fulfillment service.
     */
    const REJECTED = "REJECTED";
}
