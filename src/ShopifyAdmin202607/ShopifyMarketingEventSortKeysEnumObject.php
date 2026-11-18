<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the MarketingEvent query.
 */
class ShopifyMarketingEventSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `started_at` value.
     */
    const STARTED_AT = "STARTED_AT";
}
