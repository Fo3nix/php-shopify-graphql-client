<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the billing types of revenue attribution.
 */
class ShopifyAppRevenueAttributionTypeEnumObject extends EnumObject
{
    /**
     * App purchase related revenue collection.
     */
    const APPLICATION_PURCHASE = "APPLICATION_PURCHASE";
    /**
     * App subscription revenue collection.
     */
    const APPLICATION_SUBSCRIPTION = "APPLICATION_SUBSCRIPTION";
    /**
     * App usage-based revenue collection.
     */
    const APPLICATION_USAGE = "APPLICATION_USAGE";
    /**
     * Other app revenue collection type.
     */
    const OTHER = "OTHER";
}
