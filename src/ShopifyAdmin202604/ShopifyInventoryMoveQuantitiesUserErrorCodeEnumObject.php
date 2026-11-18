<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryMoveQuantitiesUserError`.
 */
class ShopifyInventoryMoveQuantitiesUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Internal (gid://shopify/) ledger documents are not allowed to be adjusted via API.
     */
    const INTERNAL_LEDGER_DOCUMENT = "INTERNAL_LEDGER_DOCUMENT";
    /**
     * A ledger document URI is not allowed when adjusting available.
     */
    const INVALID_AVAILABLE_DOCUMENT = "INVALID_AVAILABLE_DOCUMENT";
    /**
     * The specified inventory item could not be found.
     */
    const INVALID_INVENTORY_ITEM = "INVALID_INVENTORY_ITEM";
    /**
     * The specified ledger document is invalid.
     */
    const INVALID_LEDGER_DOCUMENT = "INVALID_LEDGER_DOCUMENT";
    /**
     * The specified location could not be found.
     */
    const INVALID_LOCATION = "INVALID_LOCATION";
    /**
     * A ledger document URI is required except when adjusting available.
     */
    const INVALID_QUANTITY_DOCUMENT = "INVALID_QUANTITY_DOCUMENT";
    /**
     * The specified quantity name is invalid.
     */
    const INVALID_QUANTITY_NAME = "INVALID_QUANTITY_NAME";
    /**
     * The quantity can't be negative.
     */
    const INVALID_QUANTITY_NEGATIVE = "INVALID_QUANTITY_NEGATIVE";
    /**
     * The quantity can't be higher than 2,000,000,000.
     */
    const INVALID_QUANTITY_TOO_HIGH = "INVALID_QUANTITY_TOO_HIGH";
    /**
     * The specified reason is invalid.
     */
    const INVALID_REASON = "INVALID_REASON";
    /**
     * The specified reference document is invalid.
     */
    const INVALID_REFERENCE_DOCUMENT = "INVALID_REFERENCE_DOCUMENT";
    /**
     * The service is temporarily unavailable. Try again later.
     */
    const SERVICE_UNAVAILABLE = "SERVICE_UNAVAILABLE";
    /**
     * The changeFromQuantity argument no longer matches the persisted quantity.
     */
    const CHANGE_FROM_QUANTITY_STALE = "CHANGE_FROM_QUANTITY_STALE";
    /**
     * The quantities couldn't be moved. Try again.
     */
    const MOVE_QUANTITIES_FAILED = "MOVE_QUANTITIES_FAILED";
    /**
     * The quantities can't be moved between different locations.
     */
    const DIFFERENT_LOCATIONS = "DIFFERENT_LOCATIONS";
    /**
     * The quantity names for each change can't be the same.
     */
    const SAME_QUANTITY_NAME = "SAME_QUANTITY_NAME";
    /**
     * Only a maximum of 2 ledger document URIs across all changes is allowed.
     */
    const MAXIMUM_LEDGER_DOCUMENT_URIS = "MAXIMUM_LEDGER_DOCUMENT_URIS";
    /**
     * The inventory item is not stocked at the location.
     */
    const ITEM_NOT_STOCKED_AT_LOCATION = "ITEM_NOT_STOCKED_AT_LOCATION";
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
