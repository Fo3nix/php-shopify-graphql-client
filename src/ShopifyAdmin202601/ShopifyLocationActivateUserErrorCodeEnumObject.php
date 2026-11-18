<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `LocationActivateUserError`.
 */
class ShopifyLocationActivateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An error occurred while activating the location.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * Shop has reached its location limit.
     */
    const LOCATION_LIMIT = "LOCATION_LIMIT";
    /**
     * This location currently cannot be activated as inventory, pending orders or transfers are being relocated from this location.
     */
    const HAS_ONGOING_RELOCATION = "HAS_ONGOING_RELOCATION";
    /**
     * Location not found.
     */
    const LOCATION_NOT_FOUND = "LOCATION_NOT_FOUND";
    /**
     * There is already an active location with this name.
     */
    const HAS_NON_UNIQUE_NAME = "HAS_NON_UNIQUE_NAME";
    /**
     * This request is currently in progress, please try again.
     */
    const IDEMPOTENCY_CONCURRENT_REQUEST = "IDEMPOTENCY_CONCURRENT_REQUEST";
    /**
     * The same idempotency key cannot be used with different operation parameters.
     */
    const IDEMPOTENCY_KEY_PARAMETER_MISMATCH = "IDEMPOTENCY_KEY_PARAMETER_MISMATCH";
}
