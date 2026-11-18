<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `SubscriptionContractStatusUpdateUserError`.
 */
class ShopifySubscriptionContractStatusUpdateErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Subscription contract status cannot be changed once terminated.
     */
    const CONTRACT_TERMINATED = "CONTRACT_TERMINATED";
}
