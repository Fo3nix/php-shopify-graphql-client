<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryTransferEditUserError`.
 */
class ShopifyInventoryTransferEditUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
    /**
     * The location of a transfer cannot be updated. Only Draft Transfers can mutate their locations.
     */
    const TRANSFER_LOCATION_IMMUTABLE = "TRANSFER_LOCATION_IMMUTABLE";
    /**
     * The origin location cannot be the same as the destination location.
     */
    const TRANSFER_ORIGIN_CANNOT_BE_THE_SAME_AS_DESTINATION = "TRANSFER_ORIGIN_CANNOT_BE_THE_SAME_AS_DESTINATION";
    /**
     * The location selected is not active.
     */
    const LOCATION_NOT_ACTIVE = "LOCATION_NOT_ACTIVE";
    /**
     * The location selected can't be found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The item is not stocked at the intended location.
     */
    const INVENTORY_STATE_NOT_ACTIVE = "INVENTORY_STATE_NOT_ACTIVE";
    /**
     * The tag exceeds the maximum length.
     */
    const TAG_EXCEEDS_MAX_LENGTH = "TAG_EXCEEDS_MAX_LENGTH";
    /**
     * One or more tags are not valid.
     */
    const INVALID_TAG = "INVALID_TAG";
}
