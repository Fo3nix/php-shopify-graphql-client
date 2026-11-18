<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `BlogCreateUserError`.
 */
class ShopifyBlogCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The value is invalid for the metafield type or for the definition options.
     */
    const INVALID_VALUE = "INVALID_VALUE";
    /**
     * The metafield type is invalid.
     */
    const INVALID_TYPE = "INVALID_TYPE";
}
