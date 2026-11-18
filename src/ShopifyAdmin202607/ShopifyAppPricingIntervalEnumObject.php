<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The frequency at which the shop is billed for an app subscription.
 */
class ShopifyAppPricingIntervalEnumObject extends EnumObject
{
    /**
     * The app subscription bills the shop annually.
     */
    const ANNUAL = "ANNUAL";
    /**
     * The app subscription bills the shop every 30 days.
     */
    const EVERY_30_DAYS = "EVERY_30_DAYS";
}
