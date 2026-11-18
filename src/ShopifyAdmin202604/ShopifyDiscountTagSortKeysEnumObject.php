<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the DiscountTag query.
 */
class ShopifyDiscountTagSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `title` value.
     */
    const TITLE = "TITLE";
}
