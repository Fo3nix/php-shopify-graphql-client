<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the font weight.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTypographyWeightEnumObject extends EnumObject
{
    /**
     * The base font's weight in the style's font group (`designTokens.typography.primary` or `secondary`). Set it with `baseFontHandle` on a Shopify font group, or `base.weight` on a custom font group. If the style doesn't set `font`, the secondary font group's base weight applies.
     */
    const BASE = "BASE";
    /**
     * The bold font's weight in the style's font group (`designTokens.typography.primary` or `secondary`). Set it with `boldFontHandle` on a Shopify font group, or `bold.weight` on a custom font group. If the style doesn't set `font`, the secondary font group's bold weight applies.
     */
    const BOLD = "BOLD";
}
