<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `BillingAttemptUserError`.
 */
class ShopifyBillingAttemptUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * Subscription contract does not exist.
     */
    const CONTRACT_NOT_FOUND = "CONTRACT_NOT_FOUND";
    /**
     * Origin time cannot be before the contract creation time.
     */
    const ORIGIN_TIME_BEFORE_CONTRACT_CREATION = "ORIGIN_TIME_BEFORE_CONTRACT_CREATION";
    /**
     * Billing cycle selector cannot select upcoming billing cycle past limit.
     */
    const UPCOMING_CYCLE_LIMIT_EXCEEDED = "UPCOMING_CYCLE_LIMIT_EXCEEDED";
    /**
     * Billing cycle selector cannot select billing cycle outside of index range.
     */
    const CYCLE_INDEX_OUT_OF_RANGE = "CYCLE_INDEX_OUT_OF_RANGE";
    /**
     * Billing cycle selector cannot select billing cycle outside of start date range.
     */
    const CYCLE_START_DATE_OUT_OF_RANGE = "CYCLE_START_DATE_OUT_OF_RANGE";
    /**
     * Origin time needs to be within the selected billing cycle's start and end at date.
     */
    const ORIGIN_TIME_OUT_OF_RANGE = "ORIGIN_TIME_OUT_OF_RANGE";
    /**
     * Billing cycle charge attempt made more than 24 hours before the billing cycle `billingAttemptExpectedDate`.
     */
    const BILLING_CYCLE_CHARGE_BEFORE_EXPECTED_DATE = "BILLING_CYCLE_CHARGE_BEFORE_EXPECTED_DATE";
    /**
     * Billing cycle must not be skipped.
     */
    const BILLING_CYCLE_SKIPPED = "BILLING_CYCLE_SKIPPED";
    /**
     * Subscription contract is under review, origin order is high risk and unfulfilled.
     */
    const CONTRACT_UNDER_REVIEW = "CONTRACT_UNDER_REVIEW";
    /**
     * Subscription contract cannot be billed once terminated.
     */
    const CONTRACT_TERMINATED = "CONTRACT_TERMINATED";
    /**
     * Subscription contract cannot be billed if paused.
     */
    const CONTRACT_PAUSED = "CONTRACT_PAUSED";
    /**
     * Billing attempt rate limit exceeded - try later.
     */
    const THROTTLED = "THROTTLED";
    /**
     * Failed to process the billing attempt.
     */
    const PROCESSING_FAILED = "PROCESSING_FAILED";
}
