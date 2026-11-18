<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible email marketing states for a customer.
 */
class ShopifyCustomerEmailMarketingStateEnumObject extends EnumObject
{
    /**
     * Default state for customers who have never subscribed to email marketing.
     * This value cannot be set via the mutation; use UNSUBSCRIBED instead to indicate
     * a customer has opted out.
     */
    const NOT_SUBSCRIBED = "NOT_SUBSCRIBED";
    /**
     * The customer is in the process of subscribing to email marketing.
     */
    const PENDING = "PENDING";
    /**
     * The customer is subscribed to email marketing.
     */
    const SUBSCRIBED = "SUBSCRIBED";
    /**
     * The customer isn't currently subscribed to email marketing but was previously subscribed.
     */
    const UNSUBSCRIBED = "UNSUBSCRIBED";
    /**
     * The customer's personal data is erased. This value is internally-set and read-only.
     */
    const REDACTED = "REDACTED";
    /**
     * This value is internally-set and read-only.
     */
    const INVALID = "INVALID";
}
