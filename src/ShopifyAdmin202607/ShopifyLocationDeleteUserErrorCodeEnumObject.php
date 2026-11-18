<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `LocationDeleteUserError`.
 */
class ShopifyLocationDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Location not found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * The location cannot be deleted while it is active.
     */
    const LOCATION_IS_ACTIVE = "LOCATION_IS_ACTIVE";
    /**
     * An error occurred while deleting the location.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * The location cannot be deleted while it has inventory.
     */
    const LOCATION_HAS_INVENTORY = "LOCATION_HAS_INVENTORY";
    /**
     * The location cannot be deleted while it has pending orders.
     */
    const LOCATION_HAS_PENDING_ORDERS = "LOCATION_HAS_PENDING_ORDERS";
    /**
     * The location cannot be deleted while it has any active Retail subscriptions in the Point of Sale channel.
     */
    const LOCATION_HAS_ACTIVE_RETAIL_SUBSCRIPTION = "LOCATION_HAS_ACTIVE_RETAIL_SUBSCRIPTION";
}
