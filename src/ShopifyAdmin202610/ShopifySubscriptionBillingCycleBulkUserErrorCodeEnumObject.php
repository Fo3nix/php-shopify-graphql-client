<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `SubscriptionBillingCycleBulkUserError`.
 */
class ShopifySubscriptionBillingCycleBulkUserErrorCodeEnumObject extends EnumObject
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
     * End date can't be more than 24 hours in the future.
     */
    const END_DATE_IN_THE_FUTURE = "END_DATE_IN_THE_FUTURE";
    /**
     * The range between start date and end date shouldn't be more than 1 week.
     */
    const INVALID_DATE_RANGE = "INVALID_DATE_RANGE";
    /**
     * Start date should be before end date.
     */
    const START_DATE_BEFORE_END_DATE = "START_DATE_BEFORE_END_DATE";
}
