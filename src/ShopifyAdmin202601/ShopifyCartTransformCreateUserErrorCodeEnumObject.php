<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CartTransformCreateUserError`.
 */
class ShopifyCartTransformCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Failed to create cart transform due to invalid input.
     */
    const INPUT_INVALID = "INPUT_INVALID";
    /**
     * No Shopify Function found for provided function_id.
     */
    const FUNCTION_NOT_FOUND = "FUNCTION_NOT_FOUND";
    /**
     * A cart transform function already exists for the provided function_id.
     */
    const FUNCTION_ALREADY_REGISTERED = "FUNCTION_ALREADY_REGISTERED";
    /**
     * Function does not implement the required interface for this cart_transform function.
     */
    const FUNCTION_DOES_NOT_IMPLEMENT = "FUNCTION_DOES_NOT_IMPLEMENT";
    /**
     * Shop must be on a Shopify Plus plan to activate functions from a custom app.
     */
    const CUSTOM_APP_FUNCTION_NOT_ELIGIBLE = "CUSTOM_APP_FUNCTION_NOT_ELIGIBLE";
    /**
     * Could not create or update metafields.
     */
    const INVALID_METAFIELDS = "INVALID_METAFIELDS";
    /**
     * The maximum number of cart transforms per shop has been reached.
     */
    const MAXIMUM_CART_TRANSFORMS = "MAXIMUM_CART_TRANSFORMS";
    /**
     * Only one of function_id or function_handle can be provided, not both.
     */
    const MULTIPLE_FUNCTION_IDENTIFIERS = "MULTIPLE_FUNCTION_IDENTIFIERS";
    /**
     * Either function_id or function_handle must be provided.
     */
    const MISSING_FUNCTION_IDENTIFIER = "MISSING_FUNCTION_IDENTIFIER";
}
