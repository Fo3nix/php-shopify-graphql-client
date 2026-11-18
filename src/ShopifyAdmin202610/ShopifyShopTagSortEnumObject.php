<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible sort of tags.
 */
class ShopifyShopTagSortEnumObject extends EnumObject
{
    /**
     * Alphabetical sort.
     */
    const ALPHABETICAL = "ALPHABETICAL";
    /**
     * Popularity sort.
     */
    const POPULAR = "POPULAR";
}
