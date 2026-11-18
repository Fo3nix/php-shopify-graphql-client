<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OrderCustomerSetUserError`.
 */
class ShopifyOrderCustomerSetUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * An error occurred while saving the order.
     */
    const NOT_SAVED = "NOT_SAVED";
    /**
     * The customer does not have the permissions to place this order.
     */
    const NOT_PERMITTED = "NOT_PERMITTED";
}
