<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ThemeUpdateUserError`.
 */
class ShopifyThemeUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
}
