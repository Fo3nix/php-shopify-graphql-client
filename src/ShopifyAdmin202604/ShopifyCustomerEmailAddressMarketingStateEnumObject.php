<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible marketing states for the customer’s email address.
 */
class ShopifyCustomerEmailAddressMarketingStateEnumObject extends EnumObject
{
    /**
     * The customer’s email address marketing state is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The customer is not subscribed to email marketing.
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
     * The customer is not subscribed to email marketing but was previously subscribed.
     */
    const UNSUBSCRIBED = "UNSUBSCRIBED";
}
