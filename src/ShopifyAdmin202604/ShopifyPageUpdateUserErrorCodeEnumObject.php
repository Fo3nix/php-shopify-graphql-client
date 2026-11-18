<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PageUpdateUserError`.
 */
class ShopifyPageUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Can’t set isPublished to true and also set a future publish date.
     */
    const INVALID_PUBLISH_DATE = "INVALID_PUBLISH_DATE";
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too big.
     */
    const TOO_BIG = "TOO_BIG";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The value is invalid for the metafield type or for the definition options.
     */
    const INVALID_VALUE = "INVALID_VALUE";
    /**
     * The metafield type is invalid.
     */
    const INVALID_TYPE = "INVALID_TYPE";
}
