<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the typography kerning.
 */
class ShopifyCheckoutBrandingTypographyKerningEnumObject extends EnumObject
{
    /**
     * Base or default kerning.
     */
    const BASE = "BASE";
    /**
     * Loose kerning, leaving more space than the default in between characters.
     */
    const LOOSE = "LOOSE";
    /**
     * Extra loose kerning, leaving even more space in between characters.
     */
    const EXTRA_LOOSE = "EXTRA_LOOSE";
}
