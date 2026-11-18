<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MenuCreateUserError`.
 */
class ShopifyMenuCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The menu cannot be nested more than 3 level deep.
     */
    const NESTING_TOO_DEEP = "NESTING_TOO_DEEP";
}
