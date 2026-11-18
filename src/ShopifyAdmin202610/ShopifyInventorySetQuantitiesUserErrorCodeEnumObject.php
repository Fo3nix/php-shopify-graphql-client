<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventorySetQuantitiesUserError`.
 */
class ShopifyInventorySetQuantitiesUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The specified inventory item could not be found.
     */
    const INVALID_INVENTORY_ITEM = "INVALID_INVENTORY_ITEM";
    /**
     * The specified location could not be found.
     */
    const INVALID_LOCATION = "INVALID_LOCATION";
    /**
     * The quantity can't be negative.
     */
    const INVALID_QUANTITY_NEGATIVE = "INVALID_QUANTITY_NEGATIVE";
    /**
     * The specified reason is invalid.
     */
    const INVALID_REASON = "INVALID_REASON";
    /**
     * The specified reference document is invalid.
     */
    const INVALID_REFERENCE_DOCUMENT = "INVALID_REFERENCE_DOCUMENT";
    /**
     * The total quantity can't be higher than 1,000,000,000.
     */
    const INVALID_QUANTITY_TOO_HIGH = "INVALID_QUANTITY_TOO_HIGH";
    /**
     * The total quantity can't be lower than -1,000,000,000.
     */
    const INVALID_QUANTITY_TOO_LOW = "INVALID_QUANTITY_TOO_LOW";
    /**
     * The compareQuantity argument must be given to each quantity or ignored using ignoreCompareQuantity.
     */
    const COMPARE_QUANTITY_REQUIRED = "COMPARE_QUANTITY_REQUIRED";
    /**
     * The compareQuantity value does not match persisted value.
     */
    const COMPARE_QUANTITY_STALE = "COMPARE_QUANTITY_STALE";
    /**
     * The changeFromQuantity value does not match persisted value.
     */
    const CHANGE_FROM_QUANTITY_STALE = "CHANGE_FROM_QUANTITY_STALE";
    /**
     * The quantity name must be either 'available' or 'on_hand'.
     */
    const INVALID_NAME = "INVALID_NAME";
    /**
     * The combination of inventoryItemId and locationId must be unique.
     */
    const NO_DUPLICATE_INVENTORY_ITEM_ID_GROUP_ID_PAIR = "NO_DUPLICATE_INVENTORY_ITEM_ID_GROUP_ID_PAIR";
    /**
     * The specified inventory item is not allowed to be adjusted via API. Example: if the inventory item is a parent bundle.
     */
    const NON_MUTABLE_INVENTORY_ITEM = "NON_MUTABLE_INVENTORY_ITEM";
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
