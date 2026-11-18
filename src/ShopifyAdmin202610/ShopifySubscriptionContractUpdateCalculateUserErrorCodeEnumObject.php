<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `SubscriptionContractUpdateCalculateUserError`.
 */
class ShopifySubscriptionContractUpdateCalculateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The subscription contract is terminated and can't be updated.
     */
    const CONTRACT_TERMINATED = "CONTRACT_TERMINATED";
    /**
     * The subscription contract has a current or upcoming billing cycle contract edit and can't be updated.
     */
    const CONTRACT_HAS_FUTURE_EDITS = "CONTRACT_HAS_FUTURE_EDITS";
}
