<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Blog query.
 */
class ShopifyBlogSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `handle` value.
     */
    const HANDLE = "HANDLE";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `title` value.
     */
    const TITLE = "TITLE";
}
