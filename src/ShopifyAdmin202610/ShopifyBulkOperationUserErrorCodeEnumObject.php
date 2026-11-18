<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `BulkOperationUserError`.
 */
class ShopifyBulkOperationUserErrorCodeEnumObject extends EnumObject
{
    /**
     * A bulk operation is already in progress.
     */
    const OPERATION_IN_PROGRESS = "OPERATION_IN_PROGRESS";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Bulk operations limit reached. Please try again later.
     */
    const LIMIT_REACHED = "LIMIT_REACHED";
}
