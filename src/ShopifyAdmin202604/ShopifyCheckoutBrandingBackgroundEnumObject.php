<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The container background style.
 */
class ShopifyCheckoutBrandingBackgroundEnumObject extends EnumObject
{
    /**
     * The Base background style.
     */
    const BASE = "BASE";
    /**
     * The Subdued background style.
     */
    const SUBDUED = "SUBDUED";
    /**
     * The Transparent background style.
     */
    const TRANSPARENT = "TRANSPARENT";
}
