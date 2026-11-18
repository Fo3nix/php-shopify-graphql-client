<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metafield access permissions for the Admin API.
 */
class ShopifyMetafieldAdminAccessInputEnumObject extends EnumObject
{
    /**
     * The merchant has read-only access. No other apps have access.
     */
    const MERCHANT_READ = "MERCHANT_READ";
    /**
     * The merchant has read and write access. No other apps have access.
     */
    const MERCHANT_READ_WRITE = "MERCHANT_READ_WRITE";
}
