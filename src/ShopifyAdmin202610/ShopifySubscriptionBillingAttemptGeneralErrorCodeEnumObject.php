<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Error codes for other billing attempt failures.
 */
class ShopifySubscriptionBillingAttemptGeneralErrorCodeEnumObject extends EnumObject
{
    /**
     * Non-test order limit reached.
     */
    const NON_TEST_ORDER_LIMIT_REACHED = "NON_TEST_ORDER_LIMIT_REACHED";
    /**
     * Free gift cards are not allowed.
     */
    const FREE_GIFT_CARD_NOT_ALLOWED = "FREE_GIFT_CARD_NOT_ALLOWED";
    /**
     * Customer was not found.
     */
    const CUSTOMER_NOT_FOUND = "CUSTOMER_NOT_FOUND";
    /**
     * Customer is invalid.
     */
    const CUSTOMER_INVALID = "CUSTOMER_INVALID";
    /**
     * Billing address is invalid.
     */
    const INVALID_BILLING_ADDRESS = "INVALID_BILLING_ADDRESS";
    /**
     * Merchant account error.
     */
    const MERCHANT_ACCOUNT_ERROR = "MERCHANT_ACCOUNT_ERROR";
    /**
     * Payment method was not found.
     */
    const PAYMENT_METHOD_NOT_FOUND = "PAYMENT_METHOD_NOT_FOUND";
    /**
     * Payment method not specified.
     */
    const PAYMENT_METHOD_NOT_SPECIFIED = "PAYMENT_METHOD_NOT_SPECIFIED";
    /**
     * Payment method test mode incompatible with gateway.
     */
    const PAYMENT_METHOD_INCOMPATIBLE_WITH_GATEWAY_CONFIG = "PAYMENT_METHOD_INCOMPATIBLE_WITH_GATEWAY_CONFIG";
    /**
     * Payment provider is not enabled.
     */
    const PAYMENT_PROVIDER_IS_NOT_ENABLED = "PAYMENT_PROVIDER_IS_NOT_ENABLED";
}
