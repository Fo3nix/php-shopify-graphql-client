<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AppUninstallAppUninstallError`.
 */
class ShopifyAppUninstallAppUninstallErrorCodeEnumObject extends EnumObject
{
    /**
     * The app cannot be found.
     */
    const APP_NOT_FOUND = "APP_NOT_FOUND";
    /**
     * The app is not installed.
     */
    const APP_NOT_INSTALLED = "APP_NOT_INSTALLED";
    /**
     * User does not have sufficient permissions to uninstall this app.
     */
    const USER_PERMISSIONS_INSUFFICIENT = "USER_PERMISSIONS_INSUFFICIENT";
    /**
     * An error occurred while uninstalling the app.
     */
    const APP_UNINSTALL_ERROR = "APP_UNINSTALL_ERROR";
}
