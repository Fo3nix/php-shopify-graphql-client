<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryShipmentCreateUserError`.
 */
class ShopifyInventoryShipmentCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * This barcode is already assigned to another shipment.
     */
    const BARCODE_DUPLICATE = "BARCODE_DUPLICATE";
    /**
     * Barcode must be 255 characters or less.
     */
    const BARCODE_TOO_LONG = "BARCODE_TOO_LONG";
    /**
     * The shipment input cannot be empty.
     */
    const EMPTY_SHIPMENT_INPUT = "EMPTY_SHIPMENT_INPUT";
    /**
     * The item was not found.
     */
    const ITEM_NOT_FOUND = "ITEM_NOT_FOUND";
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
    /**
     * Current transfer status does not support this operation.
     */
    const INVALID_TRANSFER_STATUS = "INVALID_TRANSFER_STATUS";
    /**
     * Bundled items cannot be used for this operation.
     */
    const BUNDLED_ITEM = "BUNDLED_ITEM";
    /**
     * The quantity is invalid.
     */
    const INVALID_QUANTITY = "INVALID_QUANTITY";
    /**
     * The item does not track inventory.
     */
    const UNTRACKED_ITEM = "UNTRACKED_ITEM";
    /**
     * A single item can't be listed twice.
     */
    const DUPLICATE_ITEM = "DUPLICATE_ITEM";
    /**
     * The shipment input is invalid.
     */
    const INVALID_SHIPMENT_INPUT = "INVALID_SHIPMENT_INPUT";
    /**
     * One or more items are not valid.
     */
    const INVALID_ITEM = "INVALID_ITEM";
    /**
     * The URL is invalid.
     */
    const INVALID_URL = "INVALID_URL";
    /**
     * The location selected is not active.
     */
    const LOCATION_NOT_ACTIVE = "LOCATION_NOT_ACTIVE";
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
     * The idempotency record was found but the associated scheduled changes no longer exist.
     */
    const IDEMPOTENCY_RECORD_NOT_FOUND = "IDEMPOTENCY_RECORD_NOT_FOUND";
}
