<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `SubscriptionContractCalculationCommitUserError`.
 */
class ShopifySubscriptionContractCalculationCommitUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The calculation is not in a succeeded state and cannot be committed yet.
     */
    const NOT_READY_TO_COMMIT = "NOT_READY_TO_COMMIT";
    /**
     * The calculation only discovered delivery options and can't be committed. Create a new calculation with the chosen delivery method, then commit it.
     */
    const DISCOVERY_CALCULATION_NOT_COMMITTABLE = "DISCOVERY_CALCULATION_NOT_COMMITTABLE";
    /**
     * The subscription contract calculation could not be found.
     */
    const CALCULATION_NOT_FOUND = "CALCULATION_NOT_FOUND";
    /**
     * The subscription contract was modified since the calculation was created.
     */
    const STALE_CONTRACT = "STALE_CONTRACT";
    /**
     * The first billing date must be in the future.
     */
    const INVALID_BILLING_DATE = "INVALID_BILLING_DATE";
    /**
     * The subscription contract is terminated and the calculation can't be committed.
     */
    const CONTRACT_TERMINATED = "CONTRACT_TERMINATED";
}
