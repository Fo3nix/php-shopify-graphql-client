<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OrderCancelUserError`.
 */
class ShopifyOrderCancelUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An order refund was requested but the user does not have the refund_orders permission.
     */
    const NO_REFUND_PERMISSION = "NO_REFUND_PERMISSION";
    /**
     * An order refund was requested but the user does not have the refund_to_store_credit permission.
     */
    const NO_REFUND_TO_STORE_CREDIT_PERMISSION = "NO_REFUND_TO_STORE_CREDIT_PERMISSION";
    /**
     * A store credit order refund was requested but the expiration date is in the past.
     */
    const STORE_CREDIT_REFUND_EXPIRATION_IN_PAST = "STORE_CREDIT_REFUND_EXPIRATION_IN_PAST";
    /**
     * A store credit order refund was requested but the order has no customer.
     */
    const STORE_CREDIT_REFUND_MISSING_CUSTOMER = "STORE_CREDIT_REFUND_MISSING_CUSTOMER";
    /**
     * A store credit order refund was requested but the order is a B2B order.
     */
    const STORE_CREDIT_REFUND_B2B_NOT_SUPPORTED = "STORE_CREDIT_REFUND_B2B_NOT_SUPPORTED";
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
}
