<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Company query.
 */
class ShopifyCompanySortKeysEnumObject extends EnumObject
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
     * Sort by the `name` value.
     */
    const NAME = "NAME";
    /**
     * Sort by the `order_count` value.
     */
    const ORDER_COUNT = "ORDER_COUNT";
    /**
     * Sort by the `since_date` value.
     */
    const SINCE_DATE = "SINCE_DATE";
    /**
     * Sort by the `total_spent` value.
     */
    const TOTAL_SPENT = "TOTAL_SPENT";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
