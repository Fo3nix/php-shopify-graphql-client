<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PaymentCustomizationError`.
 */
class ShopifyPaymentCustomizationErrorCodeEnumObject extends EnumObject
{
    /**
     * Shop plan not eligible to use Functions from a custom app.
     */
    const CUSTOM_APP_FUNCTION_NOT_ELIGIBLE = "CUSTOM_APP_FUNCTION_NOT_ELIGIBLE";
    /**
     * Function does not implement the required interface.
     */
    const FUNCTION_DOES_NOT_IMPLEMENT = "FUNCTION_DOES_NOT_IMPLEMENT";
    /**
     * Function not found.
     */
    const FUNCTION_NOT_FOUND = "FUNCTION_NOT_FOUND";
    /**
     * Function is pending deletion.
     */
    const FUNCTION_PENDING_DELETION = "FUNCTION_PENDING_DELETION";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Payment customization not found.
     */
    const PAYMENT_CUSTOMIZATION_NOT_FOUND = "PAYMENT_CUSTOMIZATION_NOT_FOUND";
    /**
     * Shop must be on a Shopify Plus plan to activate payment customizations from a custom app.
     */
    const PAYMENT_CUSTOMIZATION_FUNCTION_NOT_ELIGIBLE = "PAYMENT_CUSTOMIZATION_FUNCTION_NOT_ELIGIBLE";
    /**
     * Maximum payment customizations are already enabled.
     */
    const MAXIMUM_ACTIVE_PAYMENT_CUSTOMIZATIONS = "MAXIMUM_ACTIVE_PAYMENT_CUSTOMIZATIONS";
    /**
     * Required input field must be present.
     */
    const REQUIRED_INPUT_FIELD = "REQUIRED_INPUT_FIELD";
    /**
     * Could not create or update metafields.
     */
    const INVALID_METAFIELDS = "INVALID_METAFIELDS";
    /**
     * The maximum number of payment customizations per shop has been reached.
     */
    const MAXIMUM_PAYMENT_CUSTOMIZATIONS = "MAXIMUM_PAYMENT_CUSTOMIZATIONS";
    /**
     * Function ID cannot be changed.
     */
    const FUNCTION_ID_CANNOT_BE_CHANGED = "FUNCTION_ID_CANNOT_BE_CHANGED";
    /**
     * Either function_id or function_handle must be provided.
     */
    const MISSING_FUNCTION_IDENTIFIER = "MISSING_FUNCTION_IDENTIFIER";
    /**
     * Only one of function_id or function_handle can be provided, not both.
     */
    const MULTIPLE_FUNCTION_IDENTIFIERS = "MULTIPLE_FUNCTION_IDENTIFIERS";
}
