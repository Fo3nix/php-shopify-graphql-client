<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status that describes a fulfillment or delivery event.
 */
class ShopifyFulfillmentEventStatusEnumObject extends EnumObject
{
    /**
     * A shipping label has been purchased.
     */
    const LABEL_PURCHASED = "LABEL_PURCHASED";
    /**
     * A purchased shipping label has been printed.
     */
    const LABEL_PRINTED = "LABEL_PRINTED";
    /**
     * The fulfillment is ready to be picked up.
     */
    const READY_FOR_PICKUP = "READY_FOR_PICKUP";
    /**
     * The fulfillment is confirmed. This is the default value when no other information is available.
     */
    const CONFIRMED = "CONFIRMED";
    /**
     * The fulfillment is in transit.
     */
    const IN_TRANSIT = "IN_TRANSIT";
    /**
     * The fulfillment is out for delivery.
     */
    const OUT_FOR_DELIVERY = "OUT_FOR_DELIVERY";
    /**
     * A delivery was attempted.
     */
    const ATTEMPTED_DELIVERY = "ATTEMPTED_DELIVERY";
    /**
     * The fulfillment is delayed.
     */
    const DELAYED = "DELAYED";
    /**
     * The fulfillment was successfully delivered.
     */
    const DELIVERED = "DELIVERED";
    /**
     * The fulfillment request failed.
     */
    const FAILURE = "FAILURE";
    /**
     * The fulfillment has been picked up by the carrier.
     */
    const CARRIER_PICKED_UP = "CARRIER_PICKED_UP";
}
