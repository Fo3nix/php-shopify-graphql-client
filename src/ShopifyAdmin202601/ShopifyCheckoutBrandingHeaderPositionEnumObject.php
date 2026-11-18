<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible header positions.
 */
class ShopifyCheckoutBrandingHeaderPositionEnumObject extends EnumObject
{
    /**
     * Inline position.
     */
    const INLINE = "INLINE";
    /**
     * Secondary inline position.
     */
    const INLINE_SECONDARY = "INLINE_SECONDARY";
    /**
     * Start position.
     */
    const START = "START";
}
