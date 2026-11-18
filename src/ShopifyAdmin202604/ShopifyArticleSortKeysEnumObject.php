<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Article query.
 */
class ShopifyArticleSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `author` value.
     */
    const AUTHOR = "AUTHOR";
    /**
     * Sort by the `blog_title` value.
     */
    const BLOG_TITLE = "BLOG_TITLE";
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
