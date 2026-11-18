<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid marketing consent states for a customer on a specific marketing channel. The [`CustomerMarketingConsent`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/CustomerMarketingConsent) interface and channel-specific consent mutations use these values.
 */
class ShopifyCustomerMarketingConsentStateEnumObject extends EnumObject
{
    /**
     * The customer has never subscribed to marketing on this channel. This is the default state for any channel the customer hasn't interacted with. Read-only: can't be set as an input.
     */
    const NEVER_SUBSCRIBED = "NEVER_SUBSCRIBED";
    /**
     * The customer is in the process of subscribing to marketing on this channel, for example, pending an opt-in confirmation.
     */
    const PENDING = "PENDING";
    /**
     * The customer is subscribed to marketing on this channel.
     */
    const SUBSCRIBED = "SUBSCRIBED";
    /**
     * The customer isn't currently subscribed to marketing on this channel but was previously subscribed.
     */
    const UNSUBSCRIBED = "UNSUBSCRIBED";
    /**
     * The customer's personal data is erased. This value is internally-set and read-only.
     */
    const REDACTED = "REDACTED";
}
