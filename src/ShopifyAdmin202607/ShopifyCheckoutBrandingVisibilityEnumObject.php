<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible visibility states.
 */
class ShopifyCheckoutBrandingVisibilityEnumObject extends EnumObject
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
