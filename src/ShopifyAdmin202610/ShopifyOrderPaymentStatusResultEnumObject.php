<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of a payment status.
 */
class ShopifyOrderPaymentStatusResultEnumObject extends EnumObject
{
    /**
     * The payment succeeded.
     */
    const SUCCESS = "SUCCESS";
    /**
     * The payment is authorized.
     */
    const AUTHORIZED = "AUTHORIZED";
    /**
     * The payment is voided.
     */
    const VOIDED = "VOIDED";
    /**
     * The payment is refunded.
     */
    const REFUNDED = "REFUNDED";
    /**
     * The payment is captured.
     */
    const CAPTURED = "CAPTURED";
    /**
     * The payment is in purchased status.
     */
    const PURCHASED = "PURCHASED";
    /**
     * There was an error initiating the payment.
     */
    const ERROR = "ERROR";
    /**
     * The payment is still being processed.
     */
    const PROCESSING = "PROCESSING";
    /**
     * Redirect required.
     */
    const REDIRECT_REQUIRED = "REDIRECT_REQUIRED";
    /**
     * Payment can be retried.
     */
    const RETRYABLE = "RETRYABLE";
    /**
     * Status is unknown.
     */
    const UNKNOWN = "UNKNOWN";
    /**
     * The payment is awaiting processing.
     */
    const INITIATED = "INITIATED";
    /**
     * The payment is pending with the provider, and may take a while.
     */
    const PENDING = "PENDING";
    /**
     * The payment partially succeeded. Some payment methods were charged but the primary payment method failed.
     */
    const PARTIAL_SUCCESS = "PARTIAL_SUCCESS";
}
