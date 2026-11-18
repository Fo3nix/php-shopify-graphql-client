<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CollectionReorderProductsUserError`.
 */
class ShopifyCollectionReorderProductsUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Products are currently being reordered. Please try again later.
     */
    const TOO_MANY_ATTEMPTS_TO_REORDER_PRODUCTS = "TOO_MANY_ATTEMPTS_TO_REORDER_PRODUCTS";
    /**
     * The collection was not found. Please check the collection ID and try again.
     */
    const COLLECTION_NOT_FOUND = "COLLECTION_NOT_FOUND";
    /**
     * The collection is not manually sorted. Can't reorder products unless collection is manually sorted.
     */
    const MANUALLY_SORTED_COLLECTION = "MANUALLY_SORTED_COLLECTION";
    /**
     * The move is invalid.
     */
    const INVALID_MOVE = "INVALID_MOVE";
}
