<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `InventoryBulkToggleActivationUserError`.
 */
class ShopifyInventoryBulkToggleActivationUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An error occurred while setting the activation status.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * Cannot unstock an inventory item from the only location at which it is stocked.
     */
    const CANNOT_DEACTIVATE_FROM_ONLY_LOCATION = "CANNOT_DEACTIVATE_FROM_ONLY_LOCATION";
    /**
     * Cannot unstock this inventory item from this location because it has incoming quantities.
     */
    const INCOMING_INVENTORY_AT_LOCATION = "INCOMING_INVENTORY_AT_LOCATION";
    /**
     * Cannot unstock this inventory item from this location because it has committed quantities.
     */
    const COMMITTED_INVENTORY_AT_LOCATION = "COMMITTED_INVENTORY_AT_LOCATION";
    /**
     * Cannot unstock this inventory item from this location because it has unavailable quantities.
     */
    const RESERVED_INVENTORY_AT_LOCATION = "RESERVED_INVENTORY_AT_LOCATION";
    /**
     * Failed to unstock this inventory item from this location.
     */
    const FAILED_TO_UNSTOCK_FROM_LOCATION = "FAILED_TO_UNSTOCK_FROM_LOCATION";
    /**
     * Cannot stock this inventory item at this location because it is managed by a third-party fulfillment service.
     */
    const INVENTORY_MANAGED_BY_3RD_PARTY = "INVENTORY_MANAGED_BY_3RD_PARTY";
    /**
     * Cannot stock this inventory item at this location because it is managed by Shopify.
     */
    const INVENTORY_MANAGED_BY_SHOPIFY = "INVENTORY_MANAGED_BY_SHOPIFY";
    /**
     * Failed to stock this inventory item at this location.
     */
    const FAILED_TO_STOCK_AT_LOCATION = "FAILED_TO_STOCK_AT_LOCATION";
    /**
     * Cannot stock this inventory item at this location because the variant is missing a SKU.
     */
    const MISSING_SKU = "MISSING_SKU";
    /**
     * The location was not found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The inventory item was not found.
     */
    const INVENTORY_ITEM_NOT_FOUND = "INVENTORY_ITEM_NOT_FOUND";
}
