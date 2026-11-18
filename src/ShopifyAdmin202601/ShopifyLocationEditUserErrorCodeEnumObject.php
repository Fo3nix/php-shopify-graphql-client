<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `LocationEditUserError`.
 */
class ShopifyLocationEditUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The ZIP code is not a valid US ZIP code.
     */
    const INVALID_US_ZIPCODE = "INVALID_US_ZIPCODE";
    /**
     * An error occurred while editing the location.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * At least one location must fulfill online orders.
     */
    const CANNOT_DISABLE_ONLINE_ORDER_FULFILLMENT = "CANNOT_DISABLE_ONLINE_ORDER_FULFILLMENT";
    /**
     * Cannot modify the online order fulfillment preference for fulfillment service locations.
     */
    const CANNOT_MODIFY_ONLINE_ORDER_FULFILLMENT_FOR_FS_LOCATION = "CANNOT_MODIFY_ONLINE_ORDER_FULFILLMENT_FOR_FS_LOCATION";
    /**
     * The type is invalid.
     */
    const INVALID_TYPE = "INVALID_TYPE";
    /**
     * The value is invalid for the metafield type or for the definition options.
     */
    const INVALID_VALUE = "INVALID_VALUE";
    /**
     * ApiPermission metafields can only be created or updated by the app owner.
     */
    const APP_NOT_AUTHORIZED = "APP_NOT_AUTHORIZED";
    /**
     * Unstructured reserved namespace.
     */
    const UNSTRUCTURED_RESERVED_NAMESPACE = "UNSTRUCTURED_RESERVED_NAMESPACE";
    /**
     * Owner type can't be used in this mutation.
     */
    const DISALLOWED_OWNER_TYPE = "DISALLOWED_OWNER_TYPE";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The metafield violates a capability restriction.
     */
    const CAPABILITY_VIOLATION = "CAPABILITY_VIOLATION";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
}
