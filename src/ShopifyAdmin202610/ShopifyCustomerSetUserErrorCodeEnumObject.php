<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerSetUserError`.
 */
class ShopifyCustomerSetUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The id field is not allowed if identifier is provided.
     */
    const ID_NOT_ALLOWED = "ID_NOT_ALLOWED";
    /**
     * The input field corresponding to the identifier is required.
     */
    const MISSING_FIELD_REQUIRED = "MISSING_FIELD_REQUIRED";
    /**
     * The identifier value does not match the value of the corresponding field in the input.
     */
    const INPUT_MISMATCH = "INPUT_MISMATCH";
    /**
     * Resource matching the identifier was not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input argument `metafields` (if present) must contain the `customId` value.
     */
    const METAFIELD_MISMATCH = "METAFIELD_MISMATCH";
}
