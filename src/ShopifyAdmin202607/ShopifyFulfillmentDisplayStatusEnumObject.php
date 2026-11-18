<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The display status of a fulfillment.
 */
class ShopifyFulfillmentDisplayStatusEnumObject extends EnumObject
{
    /**
     * Displayed as **Attempted delivery**.
     */
    const ATTEMPTED_DELIVERY = "ATTEMPTED_DELIVERY";
    /**
     * Displayed as **Canceled**.
     */
    const CANCELED = "CANCELED";
    /**
     * Displayed as **Confirmed**.
     */
    const CONFIRMED = "CONFIRMED";
    /**
     * Displayed as **Delayed**.
     */
    const DELAYED = "DELAYED";
    /**
     * Displayed as **Delivered**.
     */
    const DELIVERED = "DELIVERED";
    /**
     * Displayed as **Failure**.
     */
    const FAILURE = "FAILURE";
    /**
     * Displayed as **Fulfilled**.
     */
    const FULFILLED = "FULFILLED";
    /**
     * Displayed as **Picked up by carrier**.
     */
    const CARRIER_PICKED_UP = "CARRIER_PICKED_UP";
    /**
     * Displayed as **In transit**.
     */
    const IN_TRANSIT = "IN_TRANSIT";
    /**
     * Displayed as **Label printed**.
     */
    const LABEL_PRINTED = "LABEL_PRINTED";
    /**
     * Displayed as **Label purchased**.
     */
    const LABEL_PURCHASED = "LABEL_PURCHASED";
    /**
     * Displayed as **Label voided**.
     */
    const LABEL_VOIDED = "LABEL_VOIDED";
    /**
     * Displayed as **Marked as fulfilled**.
     */
    const MARKED_AS_FULFILLED = "MARKED_AS_FULFILLED";
    /**
     * Displayed as **Not delivered**.
     */
    const NOT_DELIVERED = "NOT_DELIVERED";
    /**
     * Displayed as **Out for delivery**.
     */
    const OUT_FOR_DELIVERY = "OUT_FOR_DELIVERY";
    /**
     * Displayed as **Ready for pickup**.
     */
    const READY_FOR_PICKUP = "READY_FOR_PICKUP";
    /**
     * Displayed as **Picked up**.
     */
    const PICKED_UP = "PICKED_UP";
    /**
     * Displayed as **Submitted**.
     */
    const SUBMITTED = "SUBMITTED";
}
