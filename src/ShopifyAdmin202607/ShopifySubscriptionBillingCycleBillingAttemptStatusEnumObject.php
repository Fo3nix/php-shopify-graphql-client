<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The presence of billing attempts on Billing Cycles.
 */
class ShopifySubscriptionBillingCycleBillingAttemptStatusEnumObject extends EnumObject
{
    /**
     * Billing cycle has at least one billing attempt.
     */
    const HAS_ATTEMPT = "HAS_ATTEMPT";
    /**
     * Billing cycle has no billing attempts.
     */
    const NO_ATTEMPT = "NO_ATTEMPT";
    /**
     * Billing cycle has any number of billing attempts.
     */
    const ANY = "ANY";
}
