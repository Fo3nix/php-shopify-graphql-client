<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OrderRiskAssessmentCreateUserError`.
 */
class ShopifyOrderRiskAssessmentCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * More than 20 facts were provided for the order risk assessment.
     */
    const TOO_MANY_FACTS = "TOO_MANY_FACTS";
    /**
     * The order is marked as fulfilled and can no longer accept new order risk assessments.
     */
    const ORDER_ALREADY_FULFILLED = "ORDER_ALREADY_FULFILLED";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
}
