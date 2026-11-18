<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the SubscriptionBillingCycles query.
 */
class ShopifySubscriptionBillingCyclesSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `cycle_index` value.
     */
    const CYCLE_INDEX = "CYCLE_INDEX";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
}
