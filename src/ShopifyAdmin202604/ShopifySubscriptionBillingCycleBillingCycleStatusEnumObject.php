<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible status values of a subscription billing cycle.
 */
class ShopifySubscriptionBillingCycleBillingCycleStatusEnumObject extends EnumObject
{
    /**
     * The billing cycle is billed.
     */
    const BILLED = "BILLED";
    /**
     * The billing cycle hasn't been billed.
     */
    const UNBILLED = "UNBILLED";
}
