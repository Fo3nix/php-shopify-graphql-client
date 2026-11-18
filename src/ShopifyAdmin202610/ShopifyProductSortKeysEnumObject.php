<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Product query.
 */
class ShopifyProductSortKeysEnumObject extends EnumObject
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
     * Sort by the `inventory_total` value.
     */
    const INVENTORY_TOTAL = "INVENTORY_TOTAL";
    /**
     * Sort by the `product_type` value.
     */
    const PRODUCT_TYPE = "PRODUCT_TYPE";
    /**
     * Sort by the `published_at` value.
     */
    const PUBLISHED_AT = "PUBLISHED_AT";
    /**
     * Sort by relevance to the search terms when the `query` parameter is specified on the connection.
     * Don't use this sort key when no search query is specified.
     */
    const RELEVANCE = "RELEVANCE";
    /**
     * Sort by the `title` value.
     */
    const TITLE = "TITLE";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
    /**
     * Sort by the `vendor` value.
     */
    const VENDOR = "VENDOR";
}
