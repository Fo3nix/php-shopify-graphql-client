<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The available icons for resource alerts.
 */
class ShopifyResourceAlertIconEnumObject extends EnumObject
{
    /**
     * A checkmark inside a circle.
     */
    const CHECKMARK_CIRCLE = "CHECKMARK_CIRCLE";
    /**
     * A lowercase `i` inside a circle.
     */
    const INFORMATION_CIRCLE = "INFORMATION_CIRCLE";
}
