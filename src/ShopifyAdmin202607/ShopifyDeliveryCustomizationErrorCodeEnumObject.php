<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DeliveryCustomizationError`.
 */
class ShopifyDeliveryCustomizationErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Function not found.
     */
    const FUNCTION_NOT_FOUND = "FUNCTION_NOT_FOUND";
    /**
     * Delivery customization not found.
     */
    const DELIVERY_CUSTOMIZATION_NOT_FOUND = "DELIVERY_CUSTOMIZATION_NOT_FOUND";
    /**
     * Shop must be on a Shopify Plus plan to activate delivery customizations from a custom app.
     */
    const DELIVERY_CUSTOMIZATION_FUNCTION_NOT_ELIGIBLE = "DELIVERY_CUSTOMIZATION_FUNCTION_NOT_ELIGIBLE";
    /**
     * Unauthorized app scope.
     */
    const UNAUTHORIZED_APP_SCOPE = "UNAUTHORIZED_APP_SCOPE";
    /**
     * Maximum delivery customizations are already enabled.
     */
    const MAXIMUM_ACTIVE_DELIVERY_CUSTOMIZATIONS = "MAXIMUM_ACTIVE_DELIVERY_CUSTOMIZATIONS";
    /**
     * The maximum number of delivery customizations per shop has been reached.
     */
    const MAXIMUM_DELIVERY_CUSTOMIZATIONS = "MAXIMUM_DELIVERY_CUSTOMIZATIONS";
    /**
     * Shop must be on a Shopify Plus plan to activate functions from a custom app.
     */
    const CUSTOM_APP_FUNCTION_NOT_ELIGIBLE = "CUSTOM_APP_FUNCTION_NOT_ELIGIBLE";
    /**
     * Function does not implement the required interface for this delivery customization.
     */
    const FUNCTION_DOES_NOT_IMPLEMENT = "FUNCTION_DOES_NOT_IMPLEMENT";
    /**
     * Function is pending deletion.
     */
    const FUNCTION_PENDING_DELETION = "FUNCTION_PENDING_DELETION";
    /**
     * Function ID cannot be changed.
     */
    const FUNCTION_ID_CANNOT_BE_CHANGED = "FUNCTION_ID_CANNOT_BE_CHANGED";
    /**
     * Required input field must be present.
     */
    const REQUIRED_INPUT_FIELD = "REQUIRED_INPUT_FIELD";
    /**
     * Could not create or update metafields.
     */
    const INVALID_METAFIELDS = "INVALID_METAFIELDS";
    /**
     * Either function_id or function_handle must be provided.
     */
    const MISSING_FUNCTION_IDENTIFIER = "MISSING_FUNCTION_IDENTIFIER";
    /**
     * Only one of function_id or function_handle can be provided, not both.
     */
    const MULTIPLE_FUNCTION_IDENTIFIERS = "MULTIPLE_FUNCTION_IDENTIFIERS";
}
