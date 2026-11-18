<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible status values of a subscription.
 */
class ShopifySubscriptionContractSubscriptionStatusEnumObject extends EnumObject
{
    /**
     * The contract is active and continuing per its policies.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The contract is temporarily paused and is expected to resume in the future.
     */
    const PAUSED = "PAUSED";
    /**
     * The contract was ended by an unplanned customer action.
     */
    const CANCELLED = "CANCELLED";
    /**
     * The contract has ended per the expected circumstances. All billing and delivery cycles of the subscriptions were executed.
     */
    const EXPIRED = "EXPIRED";
    /**
     * The contract ended because billing failed and no further billing attempts are expected.
     */
    const FAILED = "FAILED";
}
