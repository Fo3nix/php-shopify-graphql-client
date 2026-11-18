<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The input fields for handling if filename is already in use.
 */
class ShopifyFileCreateInputDuplicateResolutionModeEnumObject extends EnumObject
{
    /**
     * Append a UUID if filename is already in use.
     */
    const APPEND_UUID = "APPEND_UUID";
    /**
     * Raise an error if filename is already in use.
     */
    const RAISE_ERROR = "RAISE_ERROR";
    /**
     * Replace the existing file if filename is already in use.
     */
    const REPLACE = "REPLACE";
}
