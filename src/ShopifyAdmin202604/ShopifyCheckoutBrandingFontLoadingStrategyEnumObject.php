<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The font loading strategy determines how a font face is displayed after it is loaded or failed to load.
 * For more information: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
 */
class ShopifyCheckoutBrandingFontLoadingStrategyEnumObject extends EnumObject
{
    /**
     * The font display strategy is defined by the browser user agent.
     */
    const AUTO = "AUTO";
    /**
     * Gives the font face a short block period and an infinite swap period.
     */
    const BLOCK = "BLOCK";
    /**
     * Gives the font face an extremely small block period and an infinite swap period.
     */
    const SWAP = "SWAP";
    /**
     * Gives the font face an extremely small block period and a short swap period.
     */
    const FALLBACK = "FALLBACK";
    /**
     * Gives the font face an extremely small block period and no swap period.
     */
    const OPTIONAL = "OPTIONAL";
}
