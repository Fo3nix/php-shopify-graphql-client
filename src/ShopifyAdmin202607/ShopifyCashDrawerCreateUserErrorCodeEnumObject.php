<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CashDrawerCreateUserError`.
 */
class ShopifyCashDrawerCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Failed to create cash drawer.
     */
    const NOT_SAVED = "NOT_SAVED";
    /**
     * A cash drawer with this name already exists at the specified location.
     */
    const CASH_DRAWER_ALREADY_EXISTS = "CASH_DRAWER_ALREADY_EXISTS";
    /**
     * The location was not found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The name provided is invalid.
     */
    const INVALID_NAME = "INVALID_NAME";
}
