<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The error code resulted from the marketing activity extension integration.
 */
class ShopifyMarketingActivityExtensionAppErrorCodeEnumObject extends EnumObject
{
    /**
     * The shop/user must be onboarded to use the app.
     */
    const NOT_ONBOARDED_ERROR = "NOT_ONBOARDED_ERROR";
    /**
     * The app has returned validation errors.
     */
    const VALIDATION_ERROR = "VALIDATION_ERROR";
    /**
     * The app is either not responding or returning unexpected data.
     */
    const API_ERROR = "API_ERROR";
    /**
     * The app has returned an error when invoking the platform.
     */
    const PLATFORM_ERROR = "PLATFORM_ERROR";
    /**
     * The app needs to be installed.
     */
    const INSTALL_REQUIRED_ERROR = "INSTALL_REQUIRED_ERROR";
}
