<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CheckoutAndAccountsConfigurationUserError`.
 */
class ShopifyCheckoutAndAccountsConfigurationUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * Internal error. Looks like something went wrong on our end.
     */
    const INTERNAL_SERVER_ERROR = "INTERNAL_SERVER_ERROR";
    /**
     * One or more required fields are missing in the input.
     */
    const MISSING = "MISSING";
    /**
     * One or more requested items couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The request could not be completed — please try again later.
     */
    const TRANSIENT = "TRANSIENT";
}
