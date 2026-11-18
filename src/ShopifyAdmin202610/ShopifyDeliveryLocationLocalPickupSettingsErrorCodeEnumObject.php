<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DeliveryLocationLocalPickupSettingsError`.
 */
class ShopifyDeliveryLocationLocalPickupSettingsErrorCodeEnumObject extends EnumObject
{
    /**
     * Provided locationId is not for an active location belonging to this store.
     */
    const ACTIVE_LOCATION_NOT_FOUND = "ACTIVE_LOCATION_NOT_FOUND";
    /**
     * Custom pickup time is not allowed for local pickup settings.
     */
    const CUSTOM_PICKUP_TIME_NOT_ALLOWED = "CUSTOM_PICKUP_TIME_NOT_ALLOWED";
    /**
     * An error occurred while changing the local pickup settings.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
}
