<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the footer alignment.
 */
class ShopifyCheckoutBrandingFooterAlignmentEnumObject extends EnumObject
{
    /**
     * The checkout footer alignment Start value.
     */
    const START = "START";
    /**
     * The checkout footer alignment Center value.
     */
    const CENTER = "CENTER";
    /**
     * The checkout footer alignment End value.
     */
    const END = "END";
}
