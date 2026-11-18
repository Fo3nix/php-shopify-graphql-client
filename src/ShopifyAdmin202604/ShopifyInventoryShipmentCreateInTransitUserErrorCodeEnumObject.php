<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryShipmentCreateInTransitUserError`.
 */
class ShopifyInventoryShipmentCreateInTransitUserErrorCodeEnumObject extends EnumObject
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
     * A single item can't be listed twice.
     */
    const DUPLICATE_ITEM = "DUPLICATE_ITEM";
    /**
     * The quantity is invalid.
     */
    const INVALID_QUANTITY = "INVALID_QUANTITY";
    /**
     * The item was not found.
     */
    const ITEM_NOT_FOUND = "ITEM_NOT_FOUND";
    /**
     * Current transfer status does not support this operation.
     */
    const INVALID_TRANSFER_STATUS = "INVALID_TRANSFER_STATUS";
    /**
     * The item does not track inventory.
     */
    const UNTRACKED_ITEM = "UNTRACKED_ITEM";
    /**
     * The shipment input cannot be empty.
     */
    const EMPTY_SHIPMENT_INPUT = "EMPTY_SHIPMENT_INPUT";
    /**
     * The list of line items is empty.
     */
    const ITEMS_EMPTY = "ITEMS_EMPTY";
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
    /**
     * The URL is invalid.
     */
    const INVALID_URL = "INVALID_URL";
    /**
     * The shipment input is invalid.
     */
    const INVALID_SHIPMENT_INPUT = "INVALID_SHIPMENT_INPUT";
    /**
     * One or more items are not valid.
     */
    const INVALID_ITEM = "INVALID_ITEM";
    /**
     * The item is not stocked at the intended location.
     */
    const INVENTORY_STATE_NOT_ACTIVE = "INVENTORY_STATE_NOT_ACTIVE";
    /**
     * The location selected is not active.
     */
    const LOCATION_NOT_ACTIVE = "LOCATION_NOT_ACTIVE";
    /**
     * The shipment was not found.
     */
    const SHIPMENT_NOT_FOUND = "SHIPMENT_NOT_FOUND";
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
}
