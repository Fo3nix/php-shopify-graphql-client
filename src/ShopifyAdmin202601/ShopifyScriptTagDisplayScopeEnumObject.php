<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The page or pages on the online store where the script should be included.
 */
class ShopifyScriptTagDisplayScopeEnumObject extends EnumObject
{
    /**
     * Include the script only on the web storefront.
     */
    const ONLINE_STORE = "ONLINE_STORE";
}
