<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AnalyticsTargetCreateUserError`.
 */
class ShopifyAnalyticsTargetCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Shopify employees are not permitted to perform this action.
     */
    const SHOPIFY_EMPLOYEE_IMPERSONATING = "SHOPIFY_EMPLOYEE_IMPERSONATING";
    /**
     * The provided metric is not valid for analytics targets.
     */
    const INVALID_METRIC = "INVALID_METRIC";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
}
