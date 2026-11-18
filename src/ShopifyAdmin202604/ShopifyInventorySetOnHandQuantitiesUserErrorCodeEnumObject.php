<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventorySetOnHandQuantitiesUserError`.
 */
class ShopifyInventorySetOnHandQuantitiesUserErrorCodeEnumObject extends EnumObject
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
     * The changeFromQuantity argument no longer matches the persisted quantity.
     */
    const CHANGE_FROM_QUANTITY_STALE = "CHANGE_FROM_QUANTITY_STALE";
    /**
     * The on-hand quantities couldn't be set. Try again.
     */
    const SET_ON_HAND_QUANTITIES_FAILED = "SET_ON_HAND_QUANTITIES_FAILED";
    /**
     * The inventory item is not stocked at the location.
     */
    const ITEM_NOT_STOCKED_AT_LOCATION = "ITEM_NOT_STOCKED_AT_LOCATION";
    /**
     * The specified inventory item is not allowed to be adjusted via API. Example: if the inventory item is a parent bundle.
     */
    const NON_MUTABLE_INVENTORY_ITEM = "NON_MUTABLE_INVENTORY_ITEM";
    /**
     * The total quantity can't be higher than 1,000,000,000.
     */
    const INVALID_QUANTITY_TOO_HIGH = "INVALID_QUANTITY_TOO_HIGH";
    /**
     * The compareQuantity value does not match persisted value.
     */
    const COMPARE_QUANTITY_STALE = "COMPARE_QUANTITY_STALE";
    /**
     * The service is temporarily unavailable. Try again later.
     */
    const SERVICE_UNAVAILABLE = "SERVICE_UNAVAILABLE";
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
