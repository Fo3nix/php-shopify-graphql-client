<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `SubscriptionDraftUserError`.
 */
class ShopifySubscriptionDraftErrorCodeEnumObject extends EnumObject
{
    /**
     * This line has already been removed.
     */
    const ALREADY_REMOVED = "ALREADY_REMOVED";
    /**
     * Input value is not present.
     */
    const PRESENCE = "PRESENCE";
    /**
     * Subscription draft has been already committed.
     */
    const COMMITTED = "COMMITTED";
    /**
     * Value is not in range.
     */
    const NOT_IN_RANGE = "NOT_IN_RANGE";
    /**
     * The value is not an integer.
     */
    const NOT_AN_INTEGER = "NOT_AN_INTEGER";
    /**
     * The maximum number of cycles must be greater than the minimum.
     */
    const SELLING_PLAN_MAX_CYCLES_MUST_BE_GREATER_THAN_MIN_CYCLES = "SELLING_PLAN_MAX_CYCLES_MUST_BE_GREATER_THAN_MIN_CYCLES";
    /**
     * The delivery policy interval must be a multiple of the billing policy interval.
     */
    const DELIVERY_MUST_BE_MULTIPLE_OF_BILLING = "DELIVERY_MUST_BE_MULTIPLE_OF_BILLING";
    /**
     * Next billing date is invalid.
     */
    const INVALID_BILLING_DATE = "INVALID_BILLING_DATE";
    /**
     * Note length is too long.
     */
    const INVALID_NOTE_LENGTH = "INVALID_NOTE_LENGTH";
    /**
     * Must have at least one line.
     */
    const INVALID_LINES = "INVALID_LINES";
    /**
     * Discount must have at least one entitled line.
     */
    const NO_ENTITLED_LINES = "NO_ENTITLED_LINES";
    /**
     * The customer doesn't exist.
     */
    const CUSTOMER_DOES_NOT_EXIST = "CUSTOMER_DOES_NOT_EXIST";
    /**
     * The payment method customer must be the same as the contract customer.
     */
    const CUSTOMER_MISMATCH = "CUSTOMER_MISMATCH";
    /**
     * The delivery method can't be blank if any lines require shipping.
     */
    const DELIVERY_METHOD_REQUIRED = "DELIVERY_METHOD_REQUIRED";
    /**
     * The local delivery options must be set for local delivery.
     */
    const MISSING_LOCAL_DELIVERY_OPTIONS = "MISSING_LOCAL_DELIVERY_OPTIONS";
    /**
     * The after cycle attribute must be unique between cycle discounts.
     */
    const CYCLE_DISCOUNTS_UNIQUE_AFTER_CYCLE = "CYCLE_DISCOUNTS_UNIQUE_AFTER_CYCLE";
    /**
     * The adjustment value must the same type as the adjustment type.
     */
    const INVALID_ADJUSTMENT_TYPE = "INVALID_ADJUSTMENT_TYPE";
    /**
     * The adjustment value must be either fixed_value or percentage.
     */
    const INVALID_ADJUSTMENT_VALUE = "INVALID_ADJUSTMENT_VALUE";
    /**
     * Another operation updated the contract concurrently as the commit was in progress.
     */
    const STALE_CONTRACT = "STALE_CONTRACT";
    /**
     * The contract draft has too many lines.
     */
    const TOO_MANY_LINES = "TOO_MANY_LINES";
    /**
     * The contract draft has too many discounts.
     */
    const TOO_MANY_DISCOUNTS = "TOO_MANY_DISCOUNTS";
    /**
     * Currency is not enabled.
     */
    const CURRENCY_NOT_ENABLED = "CURRENCY_NOT_ENABLED";
    /**
     * Cannot update a subscription contract with a current or upcoming billing cycle contract edit.
     */
    const HAS_FUTURE_EDITS = "HAS_FUTURE_EDITS";
    /**
     * Cannot commit a billing cycle contract draft with this mutation. Please use SubscriptionBillingCycleContractDraftCommit.
     */
    const BILLING_CYCLE_PRESENT = "BILLING_CYCLE_PRESENT";
    /**
     * Cannot commit a contract draft with this mutation. Please use SubscriptionDraftCommit.
     */
    const BILLING_CYCLE_ABSENT = "BILLING_CYCLE_ABSENT";
    /**
     * Delivery policy cannot be updated for billing cycle contract drafts.
     */
    const BILLING_CYCLE_CONTRACT_DRAFT_DELIVERY_POLICY_INVALID = "BILLING_CYCLE_CONTRACT_DRAFT_DELIVERY_POLICY_INVALID";
    /**
     * Billing policy cannot be updated for billing cycle contract drafts.
     */
    const BILLING_CYCLE_CONTRACT_DRAFT_BILLING_POLICY_INVALID = "BILLING_CYCLE_CONTRACT_DRAFT_BILLING_POLICY_INVALID";
    /**
     * Contract draft must be a billing cycle contract draft for contract concatenation.
     */
    const CONCATENATION_BILLING_CYCLE_CONTRACT_DRAFT_REQUIRED = "CONCATENATION_BILLING_CYCLE_CONTRACT_DRAFT_REQUIRED";
    /**
     * Cannot concatenate a contract draft from subscriptionContractCreate mutation.
     */
    const CONCATENATION_UNCOMMITTED_CONTRACT_DRAFT = "CONCATENATION_UNCOMMITTED_CONTRACT_DRAFT";
    /**
     * Concatenated contracts cannot contain duplicate subscription contracts.
     */
    const DUPLICATE_CONCATENATED_CONTRACTS = "DUPLICATE_CONCATENATED_CONTRACTS";
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
     * Billing cycle selector requires exactly one of index or date to be provided.
     */
    const CYCLE_SELECTOR_VALIDATE_ONE_OF = "CYCLE_SELECTOR_VALIDATE_ONE_OF";
    /**
     * Maximum number of concatenated contracts on a billing cycle contract draft exceeded.
     */
    const EXCEEDED_MAX_CONCATENATED_CONTRACTS = "EXCEEDED_MAX_CONCATENATED_CONTRACTS";
    /**
     * Customer is scheduled for redaction or has been redacted.
     */
    const CUSTOMER_REDACTED = "CUSTOMER_REDACTED";
    /**
     * Customer payment method is required.
     */
    const MISSING_CUSTOMER_PAYMENT_METHOD = "MISSING_CUSTOMER_PAYMENT_METHOD";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value should be greater than the minimum allowed value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The input value should be greater than or equal to the minimum value allowed.
     */
    const GREATER_THAN_OR_EQUAL_TO = "GREATER_THAN_OR_EQUAL_TO";
    /**
     * The input value should be less than the maximum value allowed.
     */
    const LESS_THAN = "LESS_THAN";
    /**
     * The input value should be less than or equal to the maximum value allowed.
     */
    const LESS_THAN_OR_EQUAL_TO = "LESS_THAN_OR_EQUAL_TO";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
}
