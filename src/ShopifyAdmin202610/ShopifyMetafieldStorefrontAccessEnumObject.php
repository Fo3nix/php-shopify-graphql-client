<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metafield access permissions for the Storefront API.
 */
class ShopifyMetafieldStorefrontAccessEnumObject extends EnumObject
{
    /**
     * Read-only access.
     */
    const PUBLIC_READ = "PUBLIC_READ";
    /**
     * No access.
     */
    const NONE = "NONE";
}
