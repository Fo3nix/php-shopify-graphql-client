<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The font selection.
 */
class ShopifyCheckoutBrandingTypographyFontEnumObject extends EnumObject
{
    /**
     * The primary font.
     */
    const PRIMARY = "PRIMARY";
    /**
     * The secondary font.
     */
    const SECONDARY = "SECONDARY";
}
