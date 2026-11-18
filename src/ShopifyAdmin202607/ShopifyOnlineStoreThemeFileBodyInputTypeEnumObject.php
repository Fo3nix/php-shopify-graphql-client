<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The input type for a theme file body.
 */
class ShopifyOnlineStoreThemeFileBodyInputTypeEnumObject extends EnumObject
{
    /**
     * The text body of the theme file.
     */
    const TEXT = "TEXT";
    /**
     * The base64 encoded body of a theme file.
     */
    const BASE64 = "BASE64";
    /**
     * The url of the body of a theme file.
     */
    const URL = "URL";
}
