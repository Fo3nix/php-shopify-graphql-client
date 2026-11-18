<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CashDrawerUpdateUserError`.
 */
class ShopifyCashDrawerUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Failed to update cash drawer.
     */
    const NOT_SAVED = "NOT_SAVED";
    /**
     * The cash drawer was not found.
     */
    const CASH_DRAWER_NOT_FOUND = "CASH_DRAWER_NOT_FOUND";
    /**
     * A cash drawer with this name already exists at the specified location.
     */
    const CASH_DRAWER_ALREADY_EXISTS = "CASH_DRAWER_ALREADY_EXISTS";
    /**
     * The name provided is invalid.
     */
    const INVALID_NAME = "INVALID_NAME";
}
