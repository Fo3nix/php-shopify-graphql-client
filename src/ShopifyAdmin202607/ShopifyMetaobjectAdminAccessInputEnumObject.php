<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metaobject access permissions for the Admin API. When the metaobject is app-owned, the owning app always has
 * full access.
 */
class ShopifyMetaobjectAdminAccessInputEnumObject extends EnumObject
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
