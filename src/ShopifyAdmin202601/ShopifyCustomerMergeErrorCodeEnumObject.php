<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerMergeUserError`.
 */
class ShopifyCustomerMergeErrorCodeEnumObject extends EnumObject
{
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The customer cannot be merged.
     */
    const INVALID_CUSTOMER = "INVALID_CUSTOMER";
    /**
     * The customer ID is invalid.
     */
    const INVALID_CUSTOMER_ID = "INVALID_CUSTOMER_ID";
    /**
     * The customer cannot be merged because it has associated gift cards.
     */
    const CUSTOMER_HAS_GIFT_CARDS = "CUSTOMER_HAS_GIFT_CARDS";
    /**
     * The customer is missing the attribute requested for override.
     */
    const MISSING_OVERRIDE_ATTRIBUTE = "MISSING_OVERRIDE_ATTRIBUTE";
    /**
     * The override attribute is invalid.
     */
    const OVERRIDE_ATTRIBUTE_INVALID = "OVERRIDE_ATTRIBUTE_INVALID";
}
