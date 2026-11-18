<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ReturnUserError`.
 */
class ShopifyReturnErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Too many arguments provided.
     */
    const TOO_MANY_ARGUMENTS = "TOO_MANY_ARGUMENTS";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value should be equal to the value allowed.
     */
    const EQUAL_TO = "EQUAL_TO";
    /**
     * The input value should be greater than the minimum allowed value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The input value should be greater than or equal to the minimum value allowed.
     */
    const GREATER_THAN_OR_EQUAL_TO = "GREATER_THAN_OR_EQUAL_TO";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value should be less than the maximum value allowed.
     */
    const LESS_THAN = "LESS_THAN";
    /**
     * The input value should be less than or equal to the maximum value allowed.
     */
    const LESS_THAN_OR_EQUAL_TO = "LESS_THAN_OR_EQUAL_TO";
    /**
     * The input value is not a number.
     */
    const NOT_A_NUMBER = "NOT_A_NUMBER";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is too big.
     */
    const TOO_BIG = "TOO_BIG";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value is the wrong length.
     */
    const WRONG_LENGTH = "WRONG_LENGTH";
    /**
     * The requested resource already exists.
     */
    const ALREADY_EXISTS = "ALREADY_EXISTS";
    /**
     * A requested resource could not be created.
     */
    const CREATION_FAILED = "CREATION_FAILED";
    /**
     * A required feature is not enabled.
     */
    const FEATURE_NOT_ENABLED = "FEATURE_NOT_ENABLED";
    /**
     * The requested configuration cannot be applied to this standard return policy which is managed for you in compliance with relevant regulations.
     */
    const INCOMPATIBLE_WITH_STANDARD_POLICY = "INCOMPATIBLE_WITH_STANDARD_POLICY";
    /**
     * A resource was not in the correct state for the operation to succeed.
     */
    const INVALID_STATE = "INVALID_STATE";
    /**
     * The user does not have permission to perform the operation.
     */
    const MISSING_PERMISSION = "MISSING_PERMISSION";
    /**
     * A requested notification could not be sent.
     */
    const NOTIFICATION_FAILED = "NOTIFICATION_FAILED";
    /**
     * A requested item is not editable.
     */
    const NOT_EDITABLE = "NOT_EDITABLE";
    /**
     * A requested item could not be found.
     */
    const NOT_FOUND = "NOT_FOUND";
}
