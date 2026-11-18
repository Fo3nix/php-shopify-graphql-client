<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Collection query.
 */
class ShopifyCollectionSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
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
}
