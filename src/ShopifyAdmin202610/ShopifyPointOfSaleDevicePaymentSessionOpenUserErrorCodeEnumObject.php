<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PointOfSaleDevicePaymentSessionOpenUserError`.
 */
class ShopifyPointOfSaleDevicePaymentSessionOpenUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The point of sale device was not found.
     */
    const POINT_OF_SALE_DEVICE_NOT_FOUND = "POINT_OF_SALE_DEVICE_NOT_FOUND";
    /**
     * The point_of_sale_device has no cash drawer associated with it.
     */
    const NO_CASH_DRAWER_ASSOCIATED = "NO_CASH_DRAWER_ASSOCIATED";
    /**
     * The point of sale device payment session was not created.
     */
    const NOT_SAVED = "NOT_SAVED";
    /**
     * A point of sale device payment session is already open for this point of sale device.
     */
    const ALREADY_OPEN = "ALREADY_OPEN";
    /**
     * The staff member was not found.
     */
    const STAFF_MEMBER_NOT_FOUND = "STAFF_MEMBER_NOT_FOUND";
    /**
     * The currency does not match the currency of the cash drawer.
     */
    const CURRENCY_MISMATCH = "CURRENCY_MISMATCH";
    /**
     * The reason code was not found.
     */
    const REASON_CODE_NOT_FOUND = "REASON_CODE_NOT_FOUND";
}
