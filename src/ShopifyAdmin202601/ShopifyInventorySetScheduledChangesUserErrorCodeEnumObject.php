<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventorySetScheduledChangesUserError`.
 */
class ShopifyInventorySetScheduledChangesUserErrorCodeEnumObject extends EnumObject
{
    /**
     * There was an error updating the scheduled changes.
     */
    const ERROR_UPDATING_SCHEDULED = "ERROR_UPDATING_SCHEDULED";
    /**
     * The from_name and to_name can't be the same.
     */
    const SAME_FROM_TO_NAMES = "SAME_FROM_TO_NAMES";
    /**
     * The specified fromName is invalid.
     */
    const INVALID_FROM_NAME = "INVALID_FROM_NAME";
    /**
     * The specified toName is invalid.
     */
    const INVALID_TO_NAME = "INVALID_TO_NAME";
    /**
     * The item can only have one scheduled change for quantity name as the toName.
     */
    const DUPLICATE_TO_NAME = "DUPLICATE_TO_NAME";
    /**
     * The specified reason is invalid.
     */
    const INVALID_REASON = "INVALID_REASON";
    /**
     * The item can only have one scheduled change for quantity name as the fromName.
     */
    const DUPLICATE_FROM_NAME = "DUPLICATE_FROM_NAME";
    /**
     * The location couldn't be found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The inventory item was not found at the location specified.
     */
    const INVENTORY_STATE_NOT_FOUND = "INVENTORY_STATE_NOT_FOUND";
    /**
     * At least 1 item must be provided.
     */
    const ITEMS_EMPTY = "ITEMS_EMPTY";
    /**
     * The inventory item was not found.
     */
    const INVENTORY_ITEM_NOT_FOUND = "INVENTORY_ITEM_NOT_FOUND";
    /**
     * The specified field is invalid.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The ledger document URI is invalid.
     */
    const LEDGER_DOCUMENT_INVALID = "LEDGER_DOCUMENT_INVALID";
    /**
     * This request is currently in progress, please try again.
     */
    const IDEMPOTENCY_CONCURRENT_REQUEST = "IDEMPOTENCY_CONCURRENT_REQUEST";
    /**
     * The same idempotency key cannot be used with different operation parameters.
     */
    const IDEMPOTENCY_KEY_PARAMETER_MISMATCH = "IDEMPOTENCY_KEY_PARAMETER_MISMATCH";
    /**
     * A previous request with this idempotency key failed. Retry with a new idempotency key.
     */
    const IDEMPOTENCY_PREVIOUS_ATTEMPT_FAILED = "IDEMPOTENCY_PREVIOUS_ATTEMPT_FAILED";
}
