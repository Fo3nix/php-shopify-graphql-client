<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The order's status in terms of fulfilled line items.
 */
class ShopifyOrderCreateFulfillmentStatusEnumObject extends EnumObject
{
    /**
     * Every line item in the order has been fulfilled.
     */
    const FULFILLED = "FULFILLED";
    /**
     * At least one line item in the order has been fulfilled.
     */
    const PARTIAL = "PARTIAL";
    /**
     * Every line item in the order has been restocked and the order canceled.
     */
    const RESTOCKED = "RESTOCKED";
}
