<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PointOfSaleDeviceAssignToCashDrawerUserError`.
 */
class ShopifyPointOfSaleDeviceAssignToCashDrawerUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The cash drawer and point of sale device must be in the same location.
     */
    const LOCATION_MISMATCH = "LOCATION_MISMATCH";
    /**
     * The cash drawer was not found.
     */
    const CASH_DRAWER_NOT_FOUND = "CASH_DRAWER_NOT_FOUND";
    /**
     * The point of sale device was not found.
     */
    const POINT_OF_SALE_DEVICE_NOT_FOUND = "POINT_OF_SALE_DEVICE_NOT_FOUND";
}
