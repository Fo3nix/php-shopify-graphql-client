<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the label position.
 */
class ShopifyCheckoutBrandingLabelPositionEnumObject extends EnumObject
{
    /**
     * The Inside label position.
     */
    const INSIDE = "INSIDE";
    /**
     * The Outside label position.
     */
    const OUTSIDE = "OUTSIDE";
}
