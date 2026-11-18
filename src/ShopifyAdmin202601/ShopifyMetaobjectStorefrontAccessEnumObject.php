<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metaobject access permissions for the Storefront API.
 */
class ShopifyMetaobjectStorefrontAccessEnumObject extends EnumObject
{
    /**
     * No access.
     */
    const NONE = "NONE";
    /**
     * Read-only access.
     */
    const PUBLIC_READ = "PUBLIC_READ";
}
