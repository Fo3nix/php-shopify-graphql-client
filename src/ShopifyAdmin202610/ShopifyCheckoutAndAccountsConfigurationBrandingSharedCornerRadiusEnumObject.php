<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible choices to override corner radius customizations on all applicable objects. Note that this selection can only be used to set the override to `NONE` (0px).
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedCornerRadiusEnumObject extends EnumObject
{
    /**
     * Set the shared corner radius override to 0px (square corners).
     */
    const NONE = "NONE";
}
