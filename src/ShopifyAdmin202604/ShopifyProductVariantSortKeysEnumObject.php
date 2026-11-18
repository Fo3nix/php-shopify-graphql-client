<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the ProductVariant query.
 */
class ShopifyProductVariantSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `full_title` value.
     */
    const FULL_TITLE = "FULL_TITLE";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by available inventory quantity in the location specified by the `query:"location_id:"` argument.
     * Don't use this sort key when no `location_id` in query is specified.
     */
    const INVENTORY_LEVELS_AVAILABLE = "INVENTORY_LEVELS_AVAILABLE";
    /**
     * Sort by the `inventory_management` value.
     */
    const INVENTORY_MANAGEMENT = "INVENTORY_MANAGEMENT";
    /**
     * Sort by the `inventory_policy` value.
     */
    const INVENTORY_POLICY = "INVENTORY_POLICY";
    /**
     * Sort by the `inventory_quantity` value.
     */
    const INVENTORY_QUANTITY = "INVENTORY_QUANTITY";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
    /**
     * Sort by the `popular` value.
     */
    const POPULAR = "POPULAR";
    /**
     * Sort by the `position` value.
     */
    const POSITION = "POSITION";
    /**
     * Sort by relevance to the search terms when the `query` parameter is specified on the connection.
     * Don't use this sort key when no search query is specified.
     */
    const RELEVANCE = "RELEVANCE";
    /**
     * Sort by the `sku` value.
     */
    const SKU = "SKU";
    /**
     * Sort by the `title` value.
     */
    const TITLE = "TITLE";
}
