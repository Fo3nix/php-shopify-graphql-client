<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `SubscriptionBillingCycleUserError`.
 */
class ShopifySubscriptionBillingCycleErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Can't find the billing cycle.
     */
    const CYCLE_NOT_FOUND = "CYCLE_NOT_FOUND";
    /**
     * There's no contract or schedule edit associated with the targeted billing cycle(s).
     */
    const NO_CYCLE_EDITS = "NO_CYCLE_EDITS";
    /**
     * The index selector is invalid.
     */
    const INVALID_CYCLE_INDEX = "INVALID_CYCLE_INDEX";
    /**
     * The date selector is invalid.
     */
    const INVALID_DATE = "INVALID_DATE";
    /**
     * Billing cycle schedule edit input provided is empty. Must take in parameters to modify schedule.
     */
    const EMPTY_BILLING_CYCLE_EDIT_SCHEDULE_INPUT = "EMPTY_BILLING_CYCLE_EDIT_SCHEDULE_INPUT";
    /**
     * Billing date cannot be set on skipped billing cycle.
     */
    const BILLING_DATE_SET_ON_SKIPPED = "BILLING_DATE_SET_ON_SKIPPED";
    /**
     * Billing date of a cycle cannot be set to a value outside of its billing date range.
     */
    const OUT_OF_BOUNDS = "OUT_OF_BOUNDS";
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
     * Billing cycle has incomplete billing attempts in progress.
     */
    const INCOMPLETE_BILLING_ATTEMPTS = "INCOMPLETE_BILLING_ATTEMPTS";
}
