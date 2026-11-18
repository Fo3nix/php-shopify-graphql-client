<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AnalyticsTargetsDeleteUserError`.
 */
class ShopifyAnalyticsTargetsDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The analytics target was not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * Shopify employees are not permitted to perform this action.
     */
    const SHOPIFY_EMPLOYEE_IMPERSONATING = "SHOPIFY_EMPLOYEE_IMPERSONATING";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
}
