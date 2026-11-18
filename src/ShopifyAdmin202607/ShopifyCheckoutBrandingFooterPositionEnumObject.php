<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the footer position.
 */
class ShopifyCheckoutBrandingFooterPositionEnumObject extends EnumObject
{
    /**
     * The End footer position.
     */
    const END = "END";
    /**
     * The Inline footer position.
     */
    const INLINE = "INLINE";
}
