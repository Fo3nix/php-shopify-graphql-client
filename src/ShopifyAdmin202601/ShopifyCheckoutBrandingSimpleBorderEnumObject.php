<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the simple border.
 */
class ShopifyCheckoutBrandingSimpleBorderEnumObject extends EnumObject
{
    /**
     * The None simple border.
     */
    const NONE = "NONE";
    /**
     * The Full simple border.
     */
    const FULL = "FULL";
}
