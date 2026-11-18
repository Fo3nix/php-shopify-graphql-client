<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Page query.
 */
class ShopifyPageSortKeysEnumObject extends EnumObject
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
     * Sort by the `published_at` value.
     */
    const PUBLISHED_AT = "PUBLISHED_AT";
    /**
     * Sort by the `title` value.
     */
    const TITLE = "TITLE";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
