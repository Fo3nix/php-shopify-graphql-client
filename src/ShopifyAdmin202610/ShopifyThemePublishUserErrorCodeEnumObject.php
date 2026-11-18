<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ThemePublishUserError`.
 */
class ShopifyThemePublishUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * Theme publishing is not available during install.
     */
    const CANNOT_PUBLISH_THEME_DURING_INSTALL = "CANNOT_PUBLISH_THEME_DURING_INSTALL";
    /**
     * Theme publishing is not allowed on this plan.
     */
    const THEME_PUBLISH_NOT_AVAILABLE_FOR_THEME_LIMITED_PLAN = "THEME_PUBLISH_NOT_AVAILABLE_FOR_THEME_LIMITED_PLAN";
}
