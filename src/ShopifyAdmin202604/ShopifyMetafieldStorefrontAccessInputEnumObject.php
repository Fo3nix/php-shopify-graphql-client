<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metafield access permissions for the Storefront API.
 */
class ShopifyMetafieldStorefrontAccessInputEnumObject extends EnumObject
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
