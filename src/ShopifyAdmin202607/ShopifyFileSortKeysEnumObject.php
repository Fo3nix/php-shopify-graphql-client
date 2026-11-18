<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the File query.
 */
class ShopifyFileSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `filename` value.
     */
    const FILENAME = "FILENAME";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `original_upload_size` value.
     */
    const ORIGINAL_UPLOAD_SIZE = "ORIGINAL_UPLOAD_SIZE";
    /**
     * Sort by relevance to the search terms when the `query` parameter is specified on the connection.
     * Don't use this sort key when no search query is specified.
     */
    const RELEVANCE = "RELEVANCE";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
