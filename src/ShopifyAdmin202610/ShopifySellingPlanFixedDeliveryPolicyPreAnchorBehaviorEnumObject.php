<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The fulfillment or delivery behavior of the first fulfillment when the order is placed before the anchor.
 */
class ShopifySellingPlanFixedDeliveryPolicyPreAnchorBehaviorEnumObject extends EnumObject
{
    /**
     * Orders placed can be fulfilled / delivered immediately. Orders placed inside a cutoff can be fulfilled / delivered at the next anchor.
     */
    const ASAP = "ASAP";
    /**
     * Orders placed can be fulfilled / delivered at the next anchor date.
     * Orders placed inside a cutoff will skip the next anchor and can be fulfilled /
     * delivered at the following anchor.
     */
    const NEXT = "NEXT";
}
