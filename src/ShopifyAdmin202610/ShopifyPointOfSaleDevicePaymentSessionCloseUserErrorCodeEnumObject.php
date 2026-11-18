<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PointOfSaleDevicePaymentSessionCloseUserError`.
 */
class ShopifyPointOfSaleDevicePaymentSessionCloseUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Staff member not found.
     */
    const STAFF_MEMBER_NOT_FOUND = "STAFF_MEMBER_NOT_FOUND";
    /**
     * Point of sale device payment session not found.
     */
    const PAYMENT_SESSION_NOT_FOUND = "PAYMENT_SESSION_NOT_FOUND";
    /**
     * Session is already closed.
     */
    const SESSION_ALREADY_CLOSED = "SESSION_ALREADY_CLOSED";
    /**
     * Time cannot be before session opening time.
     */
    const TIME_BEFORE_SESSION_OPEN = "TIME_BEFORE_SESSION_OPEN";
    /**
     * Reason code not found.
     */
    const REASON_CODE_NOT_FOUND = "REASON_CODE_NOT_FOUND";
    /**
     * The currency code does not match the cash drawer currency.
     */
    const CURRENCY_MISMATCH = "CURRENCY_MISMATCH";
    /**
     * Point of sale device has no cash drawer associated with it.
     */
    const NO_CASH_DRAWER_ASSOCIATED = "NO_CASH_DRAWER_ASSOCIATED";
    /**
     * Point of sale device payment session not closed.
     */
    const FAILED_TO_CLOSE_SESSION = "FAILED_TO_CLOSE_SESSION";
}
