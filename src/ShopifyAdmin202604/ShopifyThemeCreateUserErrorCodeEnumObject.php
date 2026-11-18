<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ThemeCreateUserError`.
 */
class ShopifyThemeCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Must be a zip file.
     */
    const INVALID_ZIP = "INVALID_ZIP";
    /**
     * Zip is empty.
     */
    const ZIP_IS_EMPTY = "ZIP_IS_EMPTY";
    /**
     * May not be used to fetch a file bigger
     *             than 50MB.
     */
    const ZIP_TOO_LARGE = "ZIP_TOO_LARGE";
    /**
     * Theme creation is not allowed for your shop's plan.
     */
    const THEME_CREATION_NOT_ALLOWED_FOR_THEME_LIMITED_PLAN = "THEME_CREATION_NOT_ALLOWED_FOR_THEME_LIMITED_PLAN";
    /**
     * Invalid theme role for theme creation.
     */
    const INVALID_THEME_ROLE_FOR_THEME_CREATION = "INVALID_THEME_ROLE_FOR_THEME_CREATION";
}
