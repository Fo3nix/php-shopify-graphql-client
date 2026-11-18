<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryTransferCreateUserError`.
 */
class ShopifyInventoryTransferCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
    /**
     * The location selected can't be found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The location selected is not active.
     */
    const LOCATION_NOT_ACTIVE = "LOCATION_NOT_ACTIVE";
    /**
     * The origin location cannot be the same as the destination location.
     */
    const TRANSFER_ORIGIN_CANNOT_BE_THE_SAME_AS_DESTINATION = "TRANSFER_ORIGIN_CANNOT_BE_THE_SAME_AS_DESTINATION";
    /**
     * The tag exceeds the maximum length.
     */
    const TAG_EXCEEDS_MAX_LENGTH = "TAG_EXCEEDS_MAX_LENGTH";
    /**
     * One or more tags are not valid.
     */
    const INVALID_TAG = "INVALID_TAG";
    /**
     * One or more metafields are not valid.
     */
    const INVALID_METAFIELDS = "INVALID_METAFIELDS";
    /**
     * This request is currently in progress, please try again.
     */
    const IDEMPOTENCY_CONCURRENT_REQUEST = "IDEMPOTENCY_CONCURRENT_REQUEST";
    /**
     * A previous request with this idempotency key failed. Retry with a new idempotency key.
     */
    const IDEMPOTENCY_PREVIOUS_ATTEMPT_FAILED = "IDEMPOTENCY_PREVIOUS_ATTEMPT_FAILED";
    /**
     * The same idempotency key cannot be used with different operation parameters.
     */
    const IDEMPOTENCY_KEY_PARAMETER_MISMATCH = "IDEMPOTENCY_KEY_PARAMETER_MISMATCH";
    /**
     * Bundled items cannot be used for this operation.
     */
    const BUNDLED_ITEM = "BUNDLED_ITEM";
    /**
     * The item does not track inventory.
     */
    const UNTRACKED_ITEM = "UNTRACKED_ITEM";
    /**
     * The item was not found.
     */
    const ITEM_NOT_FOUND = "ITEM_NOT_FOUND";
    /**
     * The quantity is invalid.
     */
    const INVALID_QUANTITY = "INVALID_QUANTITY";
    /**
     * A single item can't be listed twice.
     */
    const DUPLICATE_ITEM = "DUPLICATE_ITEM";
    /**
     * The item is not stocked at the intended location.
     */
    const INVENTORY_STATE_NOT_ACTIVE = "INVENTORY_STATE_NOT_ACTIVE";
}
