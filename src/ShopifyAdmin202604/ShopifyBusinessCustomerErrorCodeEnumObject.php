<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `BusinessCustomerUserError`.
 */
class ShopifyBusinessCustomerErrorCodeEnumObject extends EnumObject
{
    /**
     * This company location is managed by an app and can only be edited by that app.
     */
    const MANAGED_BY_APP = "MANAGED_BY_APP";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The resource wasn't found.
     */
    const RESOURCE_NOT_FOUND = "RESOURCE_NOT_FOUND";
    /**
     * Deleting the resource failed.
     */
    const FAILED_TO_DELETE = "FAILED_TO_DELETE";
    /**
     * Missing a required field.
     */
    const REQUIRED = "REQUIRED";
    /**
     * The input is empty.
     */
    const NO_INPUT = "NO_INPUT";
    /**
     * The input is invalid.
     */
    const INVALID_INPUT = "INVALID_INPUT";
    /**
     * Unexpected type.
     */
    const UNEXPECTED_TYPE = "UNEXPECTED_TYPE";
    /**
     * The field value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The number of resources exceeded the limit.
     */
    const LIMIT_REACHED = "LIMIT_REACHED";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
}
