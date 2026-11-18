<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerMarketingConsentError`.
 */
class ShopifyCustomerMarketingConsentErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Missing a required argument.
     */
    const MISSING_ARGUMENT = "MISSING_ARGUMENT";
}
