<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Describes what triggers fulfillment.
 */
class ShopifySellingPlanFulfillmentTriggerEnumObject extends EnumObject
{
    /**
     * Use the anchor values to calculate fulfillment date.
     */
    const ANCHOR = "ANCHOR";
    /**
     * As soon as possible.
     */
    const ASAP = "ASAP";
    /**
     * At an exact time defined by the fulfillment_exact_time field.
     */
    const EXACT_TIME = "EXACT_TIME";
    /**
     * Unknown. Usually to be determined in the future.
     */
    const UNKNOWN = "UNKNOWN";
}
