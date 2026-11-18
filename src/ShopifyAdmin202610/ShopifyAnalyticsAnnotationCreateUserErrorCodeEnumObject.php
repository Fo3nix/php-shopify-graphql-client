<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AnalyticsAnnotationCreateUserError`.
 */
class ShopifyAnalyticsAnnotationCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The maximum number of annotations that an app can have for a shop has been reached.
     */
    const LIMIT_REACHED = "LIMIT_REACHED";
    /**
     * Shopify employees are not permitted to perform this action.
     */
    const SHOPIFY_EMPLOYEE_IMPERSONATING = "SHOPIFY_EMPLOYEE_IMPERSONATING";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
}
