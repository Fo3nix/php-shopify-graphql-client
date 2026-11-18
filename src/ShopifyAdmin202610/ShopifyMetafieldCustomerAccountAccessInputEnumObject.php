<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metafield access permissions for the Customer Account API.
 */
class ShopifyMetafieldCustomerAccountAccessInputEnumObject extends EnumObject
{
    /**
     * Read and write access.
     */
    const READ_WRITE = "READ_WRITE";
    /**
     * Read-only access.
     */
    const READ = "READ";
    /**
     * No access.
     */
    const NONE = "NONE";
}
