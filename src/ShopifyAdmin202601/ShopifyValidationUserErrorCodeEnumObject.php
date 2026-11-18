<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ValidationUserError`.
 */
class ShopifyValidationUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Validation not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * Function not found.
     */
    const FUNCTION_NOT_FOUND = "FUNCTION_NOT_FOUND";
    /**
     * Shop must be on a Shopify Plus plan to activate functions from a custom app.
     */
    const CUSTOM_APP_FUNCTION_NOT_ELIGIBLE = "CUSTOM_APP_FUNCTION_NOT_ELIGIBLE";
    /**
     * Function does not implement the required interface for this cart & checkout validation.
     */
    const FUNCTION_DOES_NOT_IMPLEMENT = "FUNCTION_DOES_NOT_IMPLEMENT";
    /**
     * Only unlisted apps can be used for this cart & checkout validation.
     */
    const PUBLIC_APP_NOT_ALLOWED = "PUBLIC_APP_NOT_ALLOWED";
    /**
     * Function is pending deletion.
     */
    const FUNCTION_PENDING_DELETION = "FUNCTION_PENDING_DELETION";
    /**
     * Cannot have more than 25 active validation functions.
     */
    const MAX_VALIDATIONS_ACTIVATED = "MAX_VALIDATIONS_ACTIVATED";
    /**
     * Either function_id or function_handle must be provided.
     */
    const MISSING_FUNCTION_IDENTIFIER = "MISSING_FUNCTION_IDENTIFIER";
    /**
     * Only one of function_id or function_handle can be provided, not both.
     */
    const MULTIPLE_FUNCTION_IDENTIFIERS = "MULTIPLE_FUNCTION_IDENTIFIERS";
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
     * Unstructured reserved namespace.
     */
    const UNSTRUCTURED_RESERVED_NAMESPACE = "UNSTRUCTURED_RESERVED_NAMESPACE";
    /**
     * Owner type can't be used in this mutation.
     */
    const DISALLOWED_OWNER_TYPE = "DISALLOWED_OWNER_TYPE";
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
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The metafield violates a capability restriction.
     */
    const CAPABILITY_VIOLATION = "CAPABILITY_VIOLATION";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
}
