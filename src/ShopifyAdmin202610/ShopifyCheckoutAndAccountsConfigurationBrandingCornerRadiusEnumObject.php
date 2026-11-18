<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The options for customizing the corner radius of checkout-related objects. Examples include the primary button, the name text fields and the sections within the main area (if they have borders).
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusEnumObject extends EnumObject
{
    /**
     * The 0px corner radius (square corners).
     */
    const NONE = "NONE";
    /**
     * The corner radius with a pixel value defined by designTokens.cornerRadius.small.
     */
    const SMALL = "SMALL";
    /**
     * The corner radius with a pixel value defined by designTokens.cornerRadius.base.
     */
    const BASE = "BASE";
    /**
     * The corner radius with a pixel value defined by designTokens.cornerRadius.large.
     */
    const LARGE = "LARGE";
}
