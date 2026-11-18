<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Type of a theme file operation result.
 */
class ShopifyOnlineStoreThemeFileResultTypeEnumObject extends EnumObject
{
    /**
     * Operation was successful.
     */
    const SUCCESS = "SUCCESS";
    /**
     * Operation encountered an error.
     */
    const ERROR = "ERROR";
    /**
     * Operation faced a conflict with the current state of the file.
     */
    const CONFLICT = "CONFLICT";
    /**
     * Operation could not be processed due to issues with input data.
     */
    const UNPROCESSABLE_ENTITY = "UNPROCESSABLE_ENTITY";
    /**
     * Operation was malformed or invalid.
     */
    const BAD_REQUEST = "BAD_REQUEST";
    /**
     * Operation timed out.
     */
    const TIMEOUT = "TIMEOUT";
    /**
     * Operation file could not be found.
     */
    const NOT_FOUND = "NOT_FOUND";
}
