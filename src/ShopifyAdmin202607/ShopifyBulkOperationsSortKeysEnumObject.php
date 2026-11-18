<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the BulkOperations query.
 */
class ShopifyBulkOperationsSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `completed_at` value.
     */
    const COMPLETED_AT = "COMPLETED_AT";
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
}
