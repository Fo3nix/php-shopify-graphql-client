<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The fulfillment or delivery behaviors of the first fulfillment when the order is placed before the anchor.
 */
class ShopifySellingPlanRecurringDeliveryPolicyPreAnchorBehaviorEnumObject extends EnumObject
{
    /**
     * The orders placed can be fulfilled or delivered immediately. The orders placed inside a cutoff can be fulfilled or delivered at the next anchor.
     */
    const ASAP = "ASAP";
    /**
     * The orders placed can be fulfilled or delivered at the next anchor date.
     * The orders placed inside a cutoff will skip the next anchor and can be fulfilled or
     * delivered at the following anchor.
     */
    const NEXT = "NEXT";
}
