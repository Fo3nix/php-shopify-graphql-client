<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The medium through which the marketing activity and event reached consumers. This is used for reporting aggregation.
 */
class ShopifyMarketingChannelEnumObject extends EnumObject
{
    /**
     * Paid search.
     */
    const SEARCH = "SEARCH";
    /**
     * Displayed ads.
     */
    const DISPLAY = "DISPLAY";
    /**
     * Social media.
     */
    const SOCIAL = "SOCIAL";
    /**
     * Email.
     */
    const EMAIL = "EMAIL";
    /**
     * Referral links.
     */
    const REFERRAL = "REFERRAL";
}
