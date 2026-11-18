<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Markets query.
 */
class ShopifyMarketsSortKeysEnumObject extends EnumObject
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
     * Sort by the `market_condition_types` value.
     */
    const MARKET_CONDITION_TYPES = "MARKET_CONDITION_TYPES";
    /**
     * Sort by the `market_type` value.
     */
    const MARKET_TYPE = "MARKET_TYPE";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
    /**
     * Sort by the `status` value.
     */
    const STATUS = "STATUS";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
