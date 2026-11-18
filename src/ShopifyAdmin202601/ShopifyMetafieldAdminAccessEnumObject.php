<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metafield access permissions for the Admin API.
 */
class ShopifyMetafieldAdminAccessEnumObject extends EnumObject
{
    /**
     * The merchant and other apps have no access.
     */
    const PRIVATE = "PRIVATE";
    /**
     * The merchant and other apps have read-only access.
     */
    const PUBLIC_READ = "PUBLIC_READ";
    /**
     * The merchant and other apps have read and write access.
     */
    const PUBLIC_READ_WRITE = "PUBLIC_READ_WRITE";
    /**
     * The merchant has read-only access. No other apps have access.
     */
    const MERCHANT_READ = "MERCHANT_READ";
    /**
     * The merchant has read and write access. No other apps have access.
     */
    const MERCHANT_READ_WRITE = "MERCHANT_READ_WRITE";
}
