<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible visibility states.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingVisibilityEnumObject extends EnumObject
{
    /**
     * The Hidden visibility setting.
     */
    const HIDDEN = "HIDDEN";
    /**
     * The Visible visibility setting.
     */
    const VISIBLE = "VISIBLE";
}
