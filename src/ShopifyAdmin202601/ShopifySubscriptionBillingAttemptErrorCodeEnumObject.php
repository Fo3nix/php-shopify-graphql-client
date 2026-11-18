<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible error codes associated with making billing attempts. The error codes supplement the
 * `error_message` to provide consistent results and help with dunning management.
 */
class ShopifySubscriptionBillingAttemptErrorCodeEnumObject extends EnumObject
{
    /**
     * Payment method was not found.
     */
    const PAYMENT_METHOD_NOT_FOUND = "PAYMENT_METHOD_NOT_FOUND";
    /**
     * Payment provider is not enabled.
     */
    const PAYMENT_PROVIDER_IS_NOT_ENABLED = "PAYMENT_PROVIDER_IS_NOT_ENABLED";
    /**
     * Payment method is invalid. Please update or create a new payment method.
     */
    const INVALID_PAYMENT_METHOD = "INVALID_PAYMENT_METHOD";
    /**
     * There was an unexpected error during the billing attempt.
     */
    const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";
    /**
     * Payment method is expired.
     */
    const EXPIRED_PAYMENT_METHOD = "EXPIRED_PAYMENT_METHOD";
    /**
     * Payment method was declined by processor.
     */
    const PAYMENT_METHOD_DECLINED = "PAYMENT_METHOD_DECLINED";
    /**
     * There was an error during the payment authentication.
     */
    const AUTHENTICATION_ERROR = "AUTHENTICATION_ERROR";
    /**
     * Gateway is in test mode and attempted to bill a live payment method.
     */
    const TEST_MODE = "TEST_MODE";
    /**
     * Payment method was canceled by buyer.
     */
    const BUYER_CANCELED_PAYMENT_METHOD = "BUYER_CANCELED_PAYMENT_METHOD";
    /**
     * Customer was not found.
     */
    const CUSTOMER_NOT_FOUND = "CUSTOMER_NOT_FOUND";
    /**
     * Customer is invalid.
     */
    const CUSTOMER_INVALID = "CUSTOMER_INVALID";
    /**
     * The shipping address is either missing or invalid.
     */
    const INVALID_SHIPPING_ADDRESS = "INVALID_SHIPPING_ADDRESS";
    /**
     * The billing agreement ID or the transaction ID for the customer's payment method is invalid.
     */
    const INVALID_CUSTOMER_BILLING_AGREEMENT = "INVALID_CUSTOMER_BILLING_AGREEMENT";
    /**
     * A payment has already been made for this invoice.
     */
    const INVOICE_ALREADY_PAID = "INVOICE_ALREADY_PAID";
    /**
     * Payment method cannot be used with the current payment gateway test mode configuration.
     */
    const PAYMENT_METHOD_INCOMPATIBLE_WITH_GATEWAY_CONFIG = "PAYMENT_METHOD_INCOMPATIBLE_WITH_GATEWAY_CONFIG";
    /**
     * The amount is too small.
     */
    const AMOUNT_TOO_SMALL = "AMOUNT_TOO_SMALL";
    /**
     * No inventory location found or enabled.
     */
    const INVENTORY_ALLOCATIONS_NOT_FOUND = "INVENTORY_ALLOCATIONS_NOT_FOUND";
    /**
     * Not enough inventory found.
     */
    const INSUFFICIENT_INVENTORY = "INSUFFICIENT_INVENTORY";
    /**
     * Transient error, try again later.
     */
    const TRANSIENT_ERROR = "TRANSIENT_ERROR";
    /**
     * Insufficient funds.
     */
    const INSUFFICIENT_FUNDS = "INSUFFICIENT_FUNDS";
    /**
     * Purchase Type is not supported.
     */
    const PURCHASE_TYPE_NOT_SUPPORTED = "PURCHASE_TYPE_NOT_SUPPORTED";
    /**
     * Paypal Error General.
     */
    const PAYPAL_ERROR_GENERAL = "PAYPAL_ERROR_GENERAL";
    /**
     * Card number was incorrect.
     */
    const CARD_NUMBER_INCORRECT = "CARD_NUMBER_INCORRECT";
    /**
     * Fraud was suspected.
     */
    const FRAUD_SUSPECTED = "FRAUD_SUSPECTED";
    /**
     * Non-test order limit reached. Use a test payment gateway to place another order.
     */
    const NON_TEST_ORDER_LIMIT_REACHED = "NON_TEST_ORDER_LIMIT_REACHED";
    /**
     * Gift cards must have a price greater than zero.
     */
    const FREE_GIFT_CARD_NOT_ALLOWED = "FREE_GIFT_CARD_NOT_ALLOWED";
    /**
     * The billing address is invalid.
     */
    const INVALID_BILLING_ADDRESS = "INVALID_BILLING_ADDRESS";
}
