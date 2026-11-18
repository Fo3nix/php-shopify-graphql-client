<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metaobject access permissions for the Admin API. When the metaobject is app-owned, the owning app always has
 * full access.
 */
class ShopifyMetaobjectAdminAccessEnumObject extends EnumObject
{
    /**
     * The merchant has read-only access. No other apps have access.
     */
    const MERCHANT_READ = "MERCHANT_READ";
    /**
     * The merchant has read and write access. No other apps have access.
     */
    const MERCHANT_READ_WRITE = "MERCHANT_READ_WRITE";
    /**
     * The merchant and other apps have read and write access.
     */
    const PUBLIC_READ_WRITE = "PUBLIC_READ_WRITE";
}
