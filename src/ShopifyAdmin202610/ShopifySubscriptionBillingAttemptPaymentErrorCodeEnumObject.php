<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Error codes for payment-related billing attempt failures.
 */
class ShopifySubscriptionBillingAttemptPaymentErrorCodeEnumObject extends EnumObject
{
    /**
     * Payment method was declined.
     */
    const PAYMENT_METHOD_DECLINED = "PAYMENT_METHOD_DECLINED";
    /**
     * Payment method has expired.
     */
    const EXPIRED_PAYMENT_METHOD = "EXPIRED_PAYMENT_METHOD";
    /**
     * The payment method has insufficient funds to complete the payment.
     */
    const INSUFFICIENT_FUNDS = "INSUFFICIENT_FUNDS";
    /**
     * There was an error during the authentication.
     */
    const AUTHENTICATION_ERROR = "AUTHENTICATION_ERROR";
    /**
     * Payment method is invalid.
     */
    const INVALID_PAYMENT_METHOD = "INVALID_PAYMENT_METHOD";
    /**
     * The buyer canceled the payment method.
     */
    const BUYER_CANCELED_PAYMENT_METHOD = "BUYER_CANCELED_PAYMENT_METHOD";
    /**
     * The customer billing agreement is invalid.
     */
    const INVALID_CUSTOMER_BILLING_AGREEMENT = "INVALID_CUSTOMER_BILLING_AGREEMENT";
    /**
     * The transaction amount is too small.
     */
    const AMOUNT_TOO_SMALL = "AMOUNT_TOO_SMALL";
    /**
     * The transaction amount is too large.
     */
    const AMOUNT_TOO_LARGE = "AMOUNT_TOO_LARGE";
    /**
     * The card number is incorrect.
     */
    const CARD_NUMBER_INCORRECT = "CARD_NUMBER_INCORRECT";
    /**
     * Fraud was suspected on this transaction.
     */
    const FRAUD_SUSPECTED = "FRAUD_SUSPECTED";
    /**
     * The invoice has already been paid.
     */
    const INVOICE_ALREADY_PAID = "INVOICE_ALREADY_PAID";
    /**
     * A test mode error occurred.
     */
    const TEST_MODE = "TEST_MODE";
    /**
     * A general PayPal error occurred.
     */
    const PAYPAL_ERROR_GENERAL = "PAYPAL_ERROR_GENERAL";
    /**
     * The shipping address is invalid.
     */
    const INVALID_SHIPPING_ADDRESS = "INVALID_SHIPPING_ADDRESS";
    /**
     * A transient error occurred, try again later.
     */
    const TRANSIENT_ERROR = "TRANSIENT_ERROR";
    /**
     * Purchase type is not supported.
     */
    const PURCHASE_TYPE_NOT_SUPPORTED = "PURCHASE_TYPE_NOT_SUPPORTED";
    /**
     * Authentication failed during the payment processing.
     */
    const AUTHENTICATION_FAILED = "AUTHENTICATION_FAILED";
    /**
     * Additional authentication is required for this payment.
     */
    const AUTHENTICATION_REQUIRED = "AUTHENTICATION_REQUIRED";
    /**
     * The card issuer requires the cardholder to call.
     */
    const CALL_ISSUER = "CALL_ISSUER";
    /**
     * The card was declined.
     */
    const CARD_DECLINED = "CARD_DECLINED";
    /**
     * The payment confirmation was rejected.
     */
    const CONFIRMATION_REJECTED = "CONFIRMATION_REJECTED";
    /**
     * The card issuer returned 'do not honor'. The customer should reach out to their card-issuing bank for more information.
     */
    const DO_NOT_HONOR = "DO_NOT_HONOR";
    /**
     * The payment was declined due to a merchant rule.
     */
    const MERCHANT_RULE = "MERCHANT_RULE";
    /**
     * The off-session payment was rejected.
     */
    const OFF_SESSION_REJECTED = "OFF_SESSION_REJECTED";
    /**
     * The payment retry was declined.
     */
    const RETRY_DECLINED = "RETRY_DECLINED";
    /**
     * The transaction exceeded the limit.
     */
    const TRANSACTION_LIMIT_EXCEEDED = "TRANSACTION_LIMIT_EXCEEDED";
    /**
     * The postal/ZIP code is incorrect.
     */
    const INCORRECT_ZIP = "INCORRECT_ZIP";
    /**
     * The transaction amount is invalid.
     */
    const INVALID_AMOUNT = "INVALID_AMOUNT";
    /**
     * The currency is not supported.
     */
    const INVALID_CURRENCY = "INVALID_CURRENCY";
    /**
     * The card security code is invalid.
     */
    const INVALID_CVC = "INVALID_CVC";
    /**
     * The card number is invalid.
     */
    const INVALID_NUMBER = "INVALID_NUMBER";
    /**
     * The payment method type is not supported.
     */
    const PAYMENT_METHOD_UNSUPPORTED = "PAYMENT_METHOD_UNSUPPORTED";
    /**
     * An exception occurred with the payment provider.
     */
    const PAYMENT_PROVIDER_ERROR = "PAYMENT_PROVIDER_ERROR";
    /**
     * The billing address is incorrect.
     */
    const INCORRECT_ADDRESS = "INCORRECT_ADDRESS";
    /**
     * The card security code is incorrect.
     */
    const INCORRECT_CVC = "INCORRECT_CVC";
    /**
     * The card number is incorrect.
     */
    const INCORRECT_NUMBER = "INCORRECT_NUMBER";
    /**
     * The PIN is incorrect.
     */
    const INCORRECT_PIN = "INCORRECT_PIN";
    /**
     * The card has expired.
     */
    const EXPIRED_CARD = "EXPIRED_CARD";
    /**
     * The expiry date is invalid.
     */
    const INVALID_EXPIRY_DATE = "INVALID_EXPIRY_DATE";
    /**
     * The required buyer action has expired.
     */
    const EXPIRED_BUYER_ACTION = "EXPIRED_BUYER_ACTION";
    /**
     * A processing error occurred.
     */
    const PROCESSING_ERROR = "PROCESSING_ERROR";
    /**
     * A generic payment error occurred.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * The payment was cancelled.
     */
    const CANCELLED_PAYMENT = "CANCELLED_PAYMENT";
    /**
     * The purchase type is invalid.
     */
    const INVALID_PURCHASE_TYPE = "INVALID_PURCHASE_TYPE";
    /**
     * The payment request is invalid.
     */
    const INVALID_REQUEST = "INVALID_REQUEST";
}
