<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OrderCreateManualPaymentOrderCreateManualPaymentError`.
 */
class ShopifyOrderCreateManualPaymentOrderCreateManualPaymentErrorCodeEnumObject extends EnumObject
{
    /**
     * Order is not found.
     */
    const ORDER_NOT_FOUND = "ORDER_NOT_FOUND";
    /**
     * Amount must be positive.
     */
    const AMOUNT_NOT_POSITIVE = "AMOUNT_NOT_POSITIVE";
    /**
     * Payment gateway is not found.
     */
    const GATEWAY_NOT_FOUND = "GATEWAY_NOT_FOUND";
    /**
     * Amount exceeds the remaining balance.
     */
    const AMOUNT_EXCEEDS_BALANCE = "AMOUNT_EXCEEDS_BALANCE";
    /**
     * Order is temporarily unavailable.
     */
    const ORDER_IS_TEMPORARILY_UNAVAILABLE = "ORDER_IS_TEMPORARILY_UNAVAILABLE";
    /**
     * Indicates that the processedAt field is invalid, such as when it references a future date.
     */
    const PROCESSED_AT_INVALID = "PROCESSED_AT_INVALID";
    /**
     * The currency of the amount doesn't match the presentment currency of the order.
     */
    const CURRENCY_MISMATCH = "CURRENCY_MISMATCH";
}
