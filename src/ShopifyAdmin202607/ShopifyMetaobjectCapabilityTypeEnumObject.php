<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metaobject Capabilities types which can be enabled.
 */
class ShopifyMetaobjectCapabilityTypeEnumObject extends EnumObject
{
    /**
     * Allows for a Metaobject to be conditionally publishable.
     */
    const PUBLISHABLE = "PUBLISHABLE";
    /**
     * Allows for a Metaobject to be translated using the translation api.
     */
    const TRANSLATABLE = "TRANSLATABLE";
    /**
     * Allows for a Metaobject to have attributes of a renderable page such as SEO.
     */
    const RENDERABLE = "RENDERABLE";
    /**
     * Allows for a Metaobject to be rendered as an Online Store page.
     */
    const ONLINE_STORE = "ONLINE_STORE";
}
