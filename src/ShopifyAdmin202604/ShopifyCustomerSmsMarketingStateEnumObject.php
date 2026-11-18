<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid SMS marketing states for a customer’s phone number.
 */
class ShopifyCustomerSmsMarketingStateEnumObject extends EnumObject
{
    /**
     * The customer hasn't subscribed to SMS marketing.
     */
    const NOT_SUBSCRIBED = "NOT_SUBSCRIBED";
    /**
     * The customer is in the process of subscribing to SMS marketing.
     */
    const PENDING = "PENDING";
    /**
     * The customer is subscribed to SMS marketing.
     */
    const SUBSCRIBED = "SUBSCRIBED";
    /**
     * The customer isn't currently subscribed to SMS marketing but was previously subscribed.
     */
    const UNSUBSCRIBED = "UNSUBSCRIBED";
    /**
     * The customer's personal data is erased. This value is internally-set and read-only.
     */
    const REDACTED = "REDACTED";
}
