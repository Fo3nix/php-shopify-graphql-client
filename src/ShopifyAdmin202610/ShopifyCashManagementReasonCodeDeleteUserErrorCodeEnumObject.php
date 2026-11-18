<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CashManagementReasonCodeDeleteUserError`.
 */
class ShopifyCashManagementReasonCodeDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Reason code not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * Database error occurred.
     */
    const DATABASE_ERROR = "DATABASE_ERROR";
    /**
     * SYSTEM type reason codes are not deletable.
     */
    const NOT_DELETABLE = "NOT_DELETABLE";
}
