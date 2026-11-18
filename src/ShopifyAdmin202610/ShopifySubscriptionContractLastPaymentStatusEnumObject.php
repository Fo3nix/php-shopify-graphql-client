<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible status values of the last payment on a subscription contract.
 */
class ShopifySubscriptionContractLastPaymentStatusEnumObject extends EnumObject
{
    /**
     * Successful subscription billing attempt.
     */
    const SUCCEEDED = "SUCCEEDED";
    /**
     * Failed subscription billing attempt.
     */
    const FAILED = "FAILED";
}
