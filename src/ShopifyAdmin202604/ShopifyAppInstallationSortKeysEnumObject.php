<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the AppInstallation query.
 */
class ShopifyAppInstallationSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `app_title` value.
     */
    const APP_TITLE = "APP_TITLE";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `installed_at` value.
     */
    const INSTALLED_AT = "INSTALLED_AT";
}
