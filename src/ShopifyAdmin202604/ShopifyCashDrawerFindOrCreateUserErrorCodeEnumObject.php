<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CashDrawerFindOrCreateUserError`.
 */
class ShopifyCashDrawerFindOrCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Failed to find or create cash drawer.
     */
    const NOT_SAVED = "NOT_SAVED";
    /**
     * The cash drawer assignment already exists.
     */
    const CASH_DRAWER_ASSIGNMENT_ALREADY_EXISTS = "CASH_DRAWER_ASSIGNMENT_ALREADY_EXISTS";
    /**
     * The location was not found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The point of sale device was not found.
     */
    const POINT_OF_SALE_DEVICE_NOT_FOUND = "POINT_OF_SALE_DEVICE_NOT_FOUND";
}
