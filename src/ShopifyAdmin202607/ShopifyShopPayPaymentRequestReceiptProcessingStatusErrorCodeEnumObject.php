<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * A standardized error code, independent of the payment provider.
 */
class ShopifyShopPayPaymentRequestReceiptProcessingStatusErrorCodeEnumObject extends EnumObject
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
     * The CVC does not match the card number.
     */
    const INCORRECT_CVC = "INCORRECT_CVC";
    /**
     * The ZIP or postal code does not match the card number.
     */
    const INCORRECT_ZIP = "INCORRECT_ZIP";
    /**
     * The address does not match the card number.
     */
    const INCORRECT_ADDRESS = "INCORRECT_ADDRESS";
    /**
     * The entered PIN is incorrect.
     */
    const INCORRECT_PIN = "INCORRECT_PIN";
    /**
     * The amount is too small.
     */
    const AMOUNT_TOO_SMALL = "AMOUNT_TOO_SMALL";
    /**
     * The card was declined.
     */
    const CARD_DECLINED = "CARD_DECLINED";
    /**
     * There was an error while processing the payment.
     */
    const PROCESSING_ERROR = "PROCESSING_ERROR";
    /**
     * Call the card issuer.
     */
    const CALL_ISSUER = "CALL_ISSUER";
    /**
     * The 3D Secure check failed.
     */
    const THREE_D_SECURE_FAILED = "THREE_D_SECURE_FAILED";
    /**
     * The card issuer has flagged the transaction as potentially fraudulent.
     */
    const FRAUD_SUSPECTED = "FRAUD_SUSPECTED";
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
     * Too many failed CVV verification attempts.
     */
    const CVV_ATTEMPTS_EXCEEDED = "CVV_ATTEMPTS_EXCEEDED";
    /**
     * There was an unknown error with processing the payment.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * The payment method is not available in the customer's country.
     */
    const INVALID_COUNTRY = "INVALID_COUNTRY";
    /**
     * The amount is either too high or too low for the provider.
     */
    const INVALID_AMOUNT = "INVALID_AMOUNT";
    /**
     * The payment method is momentarily unavailable.
     */
    const PAYMENT_METHOD_UNAVAILABLE = "PAYMENT_METHOD_UNAVAILABLE";
}
