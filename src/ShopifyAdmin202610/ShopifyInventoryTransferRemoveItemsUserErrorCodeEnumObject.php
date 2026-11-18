<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryTransferRemoveItemsUserError`.
 */
class ShopifyInventoryTransferRemoveItemsUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The item cannot be removed because all of its quantity is fully allocated to one or more shipments (including draft shipments where the item has been picked). The error name refers to the underlying allocation check; it triggers regardless of whether the shipments have actually shipped.
     */
    const ALL_QUANTITY_SHIPPED = "ALL_QUANTITY_SHIPPED";
    /**
     * A `READY_TO_SHIP` transfer must have at least one line item; you cannot remove every line item from one. To empty a `READY_TO_SHIP` transfer, cancel it instead.
     */
    const CANT_REMOVE_ALL_ITEMS_FROM_READY_TO_SHIP_TRANSFER = "CANT_REMOVE_ALL_ITEMS_FROM_READY_TO_SHIP_TRANSFER";
    /**
     * Current transfer status does not support this operation.
     */
    const INVALID_TRANSFER_STATUS = "INVALID_TRANSFER_STATUS";
    /**
     * The item was not found.
     */
    const ITEM_NOT_FOUND = "ITEM_NOT_FOUND";
    /**
     * The line item cannot be removed because it appears on a draft shipment with quantity `0`.
     */
    const ITEM_PRESENT_ON_DRAFT_SHIPMENT_WITH_ZERO_QUANTITY = "ITEM_PRESENT_ON_DRAFT_SHIPMENT_WITH_ZERO_QUANTITY";
    /**
     * The location selected can't be found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The transfer was not found.
     */
    const TRANSFER_NOT_FOUND = "TRANSFER_NOT_FOUND";
}
