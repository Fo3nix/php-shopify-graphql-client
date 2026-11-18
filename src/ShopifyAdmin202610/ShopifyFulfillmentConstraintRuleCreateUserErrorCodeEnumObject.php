<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentConstraintRuleCreateUserError`.
 */
class ShopifyFulfillmentConstraintRuleCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Failed to create fulfillment constraint rule due to invalid input.
     */
    const INPUT_INVALID = "INPUT_INVALID";
    /**
     * No Shopify Function found for provided function_id.
     */
    const FUNCTION_NOT_FOUND = "FUNCTION_NOT_FOUND";
    /**
     * A fulfillment constraint rule already exists for the provided function_id.
     */
    const FUNCTION_ALREADY_REGISTERED = "FUNCTION_ALREADY_REGISTERED";
    /**
     * Function does not implement the required interface for this fulfillment constraint rule.
     */
    const FUNCTION_DOES_NOT_IMPLEMENT = "FUNCTION_DOES_NOT_IMPLEMENT";
    /**
     * Shop must be on a Shopify Plus plan to activate functions from a custom app.
     */
    const CUSTOM_APP_FUNCTION_NOT_ELIGIBLE = "CUSTOM_APP_FUNCTION_NOT_ELIGIBLE";
    /**
     * Function is pending deletion and cannot have new rules created against it.
     */
    const FUNCTION_PENDING_DELETION = "FUNCTION_PENDING_DELETION";
    /**
     * Only one of function_id or function_handle can be provided, not both.
     */
    const MULTIPLE_FUNCTION_IDENTIFIERS = "MULTIPLE_FUNCTION_IDENTIFIERS";
    /**
     * Either function_id or function_handle must be provided.
     */
    const MISSING_FUNCTION_IDENTIFIER = "MISSING_FUNCTION_IDENTIFIER";
    /**
     * Maximum number of fulfillment constraint rules reached. Limit is 10.
     */
    const MAXIMUM_FULFILLMENT_CONSTRAINT_RULES_REACHED = "MAXIMUM_FULFILLMENT_CONSTRAINT_RULES_REACHED";
}
