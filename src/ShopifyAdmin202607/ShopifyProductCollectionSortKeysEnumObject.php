<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for products belonging to a collection.
 */
class ShopifyProductCollectionSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by best selling.
     */
    const BEST_SELLING = "BEST_SELLING";
    /**
     * Sort by collection default order.
     */
    const COLLECTION_DEFAULT = "COLLECTION_DEFAULT";
    /**
     * Sort by creation time.
     */
    const CREATED = "CREATED";
    /**
     * Sort by id.
     */
    const ID = "ID";
    /**
     * Sort by manual order.
     */
    const MANUAL = "MANUAL";
    /**
     * Sort by price.
     */
    const PRICE = "PRICE";
    /**
     * Sort by relevance.
     */
    const RELEVANCE = "RELEVANCE";
    /**
     * Sort by title.
     */
    const TITLE = "TITLE";
}
