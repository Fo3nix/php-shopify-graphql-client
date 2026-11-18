<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Segment query.
 */
class ShopifySegmentSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `creation_date` value.
     */
    const CREATION_DATE = "CREATION_DATE";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `last_edit_date` value.
     */
    const LAST_EDIT_DATE = "LAST_EDIT_DATE";
    /**
     * Sort by relevance to the search terms when the `query` parameter is specified on the connection.
     * Don't use this sort key when no search query is specified.
     */
    const RELEVANCE = "RELEVANCE";
}
