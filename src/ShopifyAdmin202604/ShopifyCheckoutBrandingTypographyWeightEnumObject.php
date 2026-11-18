<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the font weight.
 */
class ShopifyCheckoutBrandingTypographyWeightEnumObject extends EnumObject
{
    /**
     * The base weight.
     */
    const BASE = "BASE";
    /**
     * The bold weight.
     */
    const BOLD = "BOLD";
}
