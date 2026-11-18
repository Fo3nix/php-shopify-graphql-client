<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MetafieldsSetUserError`.
 */
class ShopifyMetafieldsSetUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The metafield violates a capability restriction.
     */
    const CAPABILITY_VIOLATION = "CAPABILITY_VIOLATION";
    /**
     * The metafield has been modified since it was loaded.
     */
    const STALE_OBJECT = "STALE_OBJECT";
    /**
     * The compareDigest is invalid.
     */
    const INVALID_COMPARE_DIGEST = "INVALID_COMPARE_DIGEST";
    /**
     * The type is invalid.
     */
    const INVALID_TYPE = "INVALID_TYPE";
    /**
     * The value is invalid for the metafield type or for the definition options.
     */
    const INVALID_VALUE = "INVALID_VALUE";
    /**
     * ApiPermission metafields can only be created or updated by the app owner.
     */
    const APP_NOT_AUTHORIZED = "APP_NOT_AUTHORIZED";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value should be less than or equal to the maximum value allowed.
     */
    const LESS_THAN_OR_EQUAL_TO = "LESS_THAN_OR_EQUAL_TO";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
}
