<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the background style.
 */
class ShopifyCheckoutBrandingBackgroundStyleEnumObject extends EnumObject
{
    /**
     * The Solid background style.
     */
    const SOLID = "SOLID";
    /**
     * The None background style.
     */
    const NONE = "NONE";
}
