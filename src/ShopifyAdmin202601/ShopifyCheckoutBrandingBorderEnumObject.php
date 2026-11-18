<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the border.
 */
class ShopifyCheckoutBrandingBorderEnumObject extends EnumObject
{
    /**
     * The None border.
     */
    const NONE = "NONE";
    /**
     * The Block End border.
     */
    const BLOCK_END = "BLOCK_END";
    /**
     * The Full border.
     */
    const FULL = "FULL";
}
