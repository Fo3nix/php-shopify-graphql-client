<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The supported units for gift card expiration.
 */
class ShopifyGiftCardConfigurationExpirationUnitEnumObject extends EnumObject
{
    /**
     * Gift cards expire in days.
     */
    const DAYS = "DAYS";
    /**
     * Gift cards expire in months.
     */
    const MONTHS = "MONTHS";
    /**
     * Gift cards expire in years.
     */
    const YEARS = "YEARS";
}
