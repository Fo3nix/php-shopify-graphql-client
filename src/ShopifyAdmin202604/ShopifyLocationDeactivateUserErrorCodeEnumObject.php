<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `LocationDeactivateUserError`.
 */
class ShopifyLocationDeactivateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Location not found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * Location either has a fulfillment service or is the only location with a shipping address.
     */
    const PERMANENTLY_BLOCKED_FROM_DEACTIVATION_ERROR = "PERMANENTLY_BLOCKED_FROM_DEACTIVATION_ERROR";
    /**
     * Location has incoming inventory. The location can be deactivated after the inventory has been received.
     */
    const TEMPORARILY_BLOCKED_FROM_DEACTIVATION_ERROR = "TEMPORARILY_BLOCKED_FROM_DEACTIVATION_ERROR";
    /**
     * Location needs to be removed from Shopify POS for Retail subscription in Point of Sale channel.
     */
    const HAS_ACTIVE_RETAIL_SUBSCRIPTIONS = "HAS_ACTIVE_RETAIL_SUBSCRIPTIONS";
    /**
     * Destination location is the same as the location to be deactivated.
     */
    const DESTINATION_LOCATION_IS_THE_SAME_LOCATION = "DESTINATION_LOCATION_IS_THE_SAME_LOCATION";
    /**
     * Destination location is not found or inactive.
     */
    const DESTINATION_LOCATION_NOT_FOUND_OR_INACTIVE = "DESTINATION_LOCATION_NOT_FOUND_OR_INACTIVE";
    /**
     * Destination location is not Shopify managed.
     */
    const DESTINATION_LOCATION_NOT_SHOPIFY_MANAGED = "DESTINATION_LOCATION_NOT_SHOPIFY_MANAGED";
    /**
     * Location could not be deactivated without specifying where to relocate inventory at the location.
     */
    const HAS_ACTIVE_INVENTORY_ERROR = "HAS_ACTIVE_INVENTORY_ERROR";
    /**
     * Location could not be deactivated because it has pending orders.
     */
    const HAS_FULFILLMENT_ORDERS_ERROR = "HAS_FULFILLMENT_ORDERS_ERROR";
    /**
     * Location could not be deactivated because it has incoming inventory quantities from third party
     *         applications.
     */
    const HAS_INCOMING_FROM_EXTERNAL_DOCUMENT_SOURCES = "HAS_INCOMING_FROM_EXTERNAL_DOCUMENT_SOURCES";
    /**
     * Location could not be deactivated because it has open Shopify Fulfillment Network transfers.
     */
    const HAS_INCOMING_MOVEMENTS_ERROR = "HAS_INCOMING_MOVEMENTS_ERROR";
    /**
     * Location could not be deactivated because it has open purchase orders.
     */
    const HAS_OPEN_PURCHASE_ORDERS_ERROR = "HAS_OPEN_PURCHASE_ORDERS_ERROR";
    /**
     * Location could not be deactivated because it has active inventory transfers.
     */
    const HAS_ACTIVE_TRANSFERS_ERROR = "HAS_ACTIVE_TRANSFERS_ERROR";
    /**
     * Failed to relocate active inventories to the destination location.
     */
    const FAILED_TO_RELOCATE_ACTIVE_INVENTORIES = "FAILED_TO_RELOCATE_ACTIVE_INVENTORIES";
    /**
     * Failed to relocate open purchase orders to the destination location.
     */
    const FAILED_TO_RELOCATE_OPEN_PURCHASE_ORDERS = "FAILED_TO_RELOCATE_OPEN_PURCHASE_ORDERS";
    /**
     * Failed to relocate incoming movements to the destination location.
     */
    const FAILED_TO_RELOCATE_INCOMING_MOVEMENTS = "FAILED_TO_RELOCATE_INCOMING_MOVEMENTS";
    /**
     * Failed to relocate incoming transfers to the destination location.
     */
    const FAILED_TO_RELOCATE_INCOMING_TRANSFERS = "FAILED_TO_RELOCATE_INCOMING_TRANSFERS";
    /**
     * At least one location must fulfill online orders.
     */
    const CANNOT_DISABLE_ONLINE_ORDER_FULFILLMENT = "CANNOT_DISABLE_ONLINE_ORDER_FULFILLMENT";
    /**
     * This request is currently in progress, please try again.
     */
    const IDEMPOTENCY_CONCURRENT_REQUEST = "IDEMPOTENCY_CONCURRENT_REQUEST";
    /**
     * The same idempotency key cannot be used with different operation parameters.
     */
    const IDEMPOTENCY_KEY_PARAMETER_MISMATCH = "IDEMPOTENCY_KEY_PARAMETER_MISMATCH";
}
