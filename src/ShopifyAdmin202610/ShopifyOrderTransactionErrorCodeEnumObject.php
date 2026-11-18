<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * A standardized error code, independent of the payment provider.
 */
class ShopifyOrderTransactionErrorCodeEnumObject extends EnumObject
{
    /**
     * The card number is incorrect.
     */
    const INCORRECT_NUMBER = "INCORRECT_NUMBER";
    /**
     * The format of the card number is incorrect.
     */
    const INVALID_NUMBER = "INVALID_NUMBER";
    /**
     * The format of the expiry date is incorrect.
     */
    const INVALID_EXPIRY_DATE = "INVALID_EXPIRY_DATE";
    /**
     * The format of the CVC is incorrect.
     */
    const INVALID_CVC = "INVALID_CVC";
    /**
     * The card is expired.
     */
    const EXPIRED_CARD = "EXPIRED_CARD";
    /**
     * The card security code (CVC/CVV) is incorrect.
     */
    const INCORRECT_CVC = "INCORRECT_CVC";
    /**
     * The ZIP or postal code doesn't match the one on file.
     */
    const INCORRECT_ZIP = "INCORRECT_ZIP";
    /**
     * The address is incorrect.
     */
    const INCORRECT_ADDRESS = "INCORRECT_ADDRESS";
    /**
     * The PIN entered is incorrect.
     */
    const INCORRECT_PIN = "INCORRECT_PIN";
    /**
     * The card was declined.
     */
    const CARD_DECLINED = "CARD_DECLINED";
    /**
     * There was an error while processing the payment.
     */
    const PROCESSING_ERROR = "PROCESSING_ERROR";
    /**
     * The issuer declined the transaction, the customer should contact their issuer for more details.
     */
    const CALL_ISSUER = "CALL_ISSUER";
    /**
     * The card has been reported as lost or stolen, and the card issuer has requested that the merchant keep the card and call the number on the back.
     */
    const PICK_UP_CARD = "PICK_UP_CARD";
    /**
     * There is an error in the gateway or merchant configuration.
     */
    const CONFIG_ERROR = "CONFIG_ERROR";
    /**
     * A real card was used but the gateway was in test mode.
     */
    const TEST_MODE_LIVE_CARD = "TEST_MODE_LIVE_CARD";
    /**
     * The gateway or merchant configuration doesn't support a feature, such as network tokenization.
     */
    const UNSUPPORTED_FEATURE = "UNSUPPORTED_FEATURE";
    /**
     * There was an unknown error with processing the payment.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * The payment method is not available in the customer's country.
     */
    const INVALID_COUNTRY = "INVALID_COUNTRY";
    /**
     * The amount is invalid.
     */
    const INVALID_AMOUNT = "INVALID_AMOUNT";
    /**
     * The payment method is momentarily unavailable.
     */
    const PAYMENT_METHOD_UNAVAILABLE = "PAYMENT_METHOD_UNAVAILABLE";
    /**
     * The payment method was invalid.
     */
    const AMAZON_PAYMENTS_INVALID_PAYMENT_METHOD = "AMAZON_PAYMENTS_INVALID_PAYMENT_METHOD";
    /**
     * The maximum amount has been captured.
     */
    const AMAZON_PAYMENTS_MAX_AMOUNT_CHARGED = "AMAZON_PAYMENTS_MAX_AMOUNT_CHARGED";
    /**
     * The maximum amount has been refunded.
     */
    const AMAZON_PAYMENTS_MAX_AMOUNT_REFUNDED = "AMAZON_PAYMENTS_MAX_AMOUNT_REFUNDED";
    /**
     * The maximum of 10 authorizations has been captured for an order.
     */
    const AMAZON_PAYMENTS_MAX_AUTHORIZATIONS_CAPTURED = "AMAZON_PAYMENTS_MAX_AUTHORIZATIONS_CAPTURED";
    /**
     * The maximum of 10 refunds has been processed for an order.
     */
    const AMAZON_PAYMENTS_MAX_REFUNDS_PROCESSED = "AMAZON_PAYMENTS_MAX_REFUNDS_PROCESSED";
    /**
     * The order was canceled, which canceled all open authorizations.
     */
    const AMAZON_PAYMENTS_ORDER_REFERENCE_CANCELED = "AMAZON_PAYMENTS_ORDER_REFERENCE_CANCELED";
    /**
     * The order was not confirmed within three hours.
     */
    const AMAZON_PAYMENTS_STALE = "AMAZON_PAYMENTS_STALE";
    /**
     * The transaction amount exceeds the maximum amount allowed.
     */
    const AMOUNT_TOO_LARGE = "AMOUNT_TOO_LARGE";
    /**
     * The transaction amount is below the minimum amount allowed.
     */
    const AMOUNT_TOO_SMALL = "AMOUNT_TOO_SMALL";
    /**
     * The 3D Secure authentication failed.
     */
    const AUTHENTICATION_FAILED = "AUTHENTICATION_FAILED";
    /**
     * The transaction requires 3D Secure authentication but was attempted without authentication.
     */
    const AUTHENTICATION_REQUIRED = "AUTHENTICATION_REQUIRED";
    /**
     * The transaction was cancelled.
     */
    const CANCELLED_PAYMENT = "CANCELLED_PAYMENT";
    /**
     * The transaction was declined due to suspected card testing activity.
     */
    const CARD_TESTING = "CARD_TESTING";
    /**
     * The issuer declined the transaction without providing a specific reason.
     */
    const DO_NOT_HONOR = "DO_NOT_HONOR";
    /**
     * The transaction was declined due to suspected fraudulent activity.
     */
    const FRAUD_SUSPECTED = "FRAUD_SUSPECTED";
    /**
     * There are insufficient funds available to complete the transaction.
     */
    const INSUFFICIENT_FUNDS = "INSUFFICIENT_FUNDS";
    /**
     * The currency isn't supported.
     */
    const INVALID_CURRENCY = "INVALID_CURRENCY";
    /**
     * The payment method is invalid or not found.
     */
    const INVALID_PAYMENT_METHOD = "INVALID_PAYMENT_METHOD";
    /**
     * This payment method doesn't support the requested transaction type.
     */
    const INVALID_PURCHASE_TYPE = "INVALID_PURCHASE_TYPE";
    /**
     * The transaction couldn't be processed due to an issue with the merchant account.
     */
    const MERCHANT_ACCOUNT_ERROR = "MERCHANT_ACCOUNT_ERROR";
    /**
     * The transaction was blocked due to the merchant's custom payment risk rule.
     */
    const MERCHANT_RULE = "MERCHANT_RULE";
    /**
     * The payment instrument was declined.
     */
    const INSTRUMENT_DECLINED = "INSTRUMENT_DECLINED";
    /**
     * The payment method isn't supported.
     */
    const PAYMENT_METHOD_UNSUPPORTED = "PAYMENT_METHOD_UNSUPPORTED";
    /**
     * The transaction couldn't be processed due to an unexpected error with the payment provider.
     */
    const PAYMENT_PROVIDER_ERROR = "PAYMENT_PROVIDER_ERROR";
    /**
     * The transaction retry attempt was declined.
     */
    const RETRY_DECLINED = "RETRY_DECLINED";
    /**
     * The payment instrument has exceeded the processing frequency limit.
     */
    const TRANSACTION_LIMIT_EXCEEDED = "TRANSACTION_LIMIT_EXCEEDED";
    /**
     * The authorization has expired.
     */
    const AUTHORIZATION_EXPIRED = "AUTHORIZATION_EXPIRED";
}
