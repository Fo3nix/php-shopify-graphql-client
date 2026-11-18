<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible pickup time values that a location enabled for local pickup can have.
 */
class ShopifyDeliveryLocalPickupTimeEnumObject extends EnumObject
{
    /**
     * Usually ready in 1 hour.
     */
    const ONE_HOUR = "ONE_HOUR";
    /**
     * Usually ready in 2 hours.
     */
    const TWO_HOURS = "TWO_HOURS";
    /**
     * Usually ready in 4 hours.
     */
    const FOUR_HOURS = "FOUR_HOURS";
    /**
     * Usually ready in 24 hours.
     */
    const TWENTY_FOUR_HOURS = "TWENTY_FOUR_HOURS";
    /**
     * Usually ready in 2-4 days.
     */
    const TWO_TO_FOUR_DAYS = "TWO_TO_FOUR_DAYS";
    /**
     * Usually ready in 5+ days.
     */
    const FIVE_OR_MORE_DAYS = "FIVE_OR_MORE_DAYS";
}
