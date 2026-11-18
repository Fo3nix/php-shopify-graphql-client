<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible header alignments.
 */
class ShopifyCheckoutBrandingHeaderAlignmentEnumObject extends EnumObject
{
    /**
     * Start alignment.
     */
    const START = "START";
    /**
     * Center alignment.
     */
    const CENTER = "CENTER";
    /**
     * End alignment.
     */
    const END = "END";
}
