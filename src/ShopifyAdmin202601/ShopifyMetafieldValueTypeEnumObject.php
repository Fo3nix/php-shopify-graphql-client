<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Legacy type information for the stored value.
 * Replaced by `type`.
 */
class ShopifyMetafieldValueTypeEnumObject extends EnumObject
{
    /**
     * A text field.
     */
    const STRING = "STRING";
    /**
     * A whole number.
     */
    const INTEGER = "INTEGER";
    /**
     * A JSON string.
     */
    const JSON_STRING = "JSON_STRING";
    /**
     * A `true` or `false` value.
     */
    const BOOLEAN = "BOOLEAN";
}
