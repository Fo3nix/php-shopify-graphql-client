<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CollectionDuplicateUserError`.
 */
class ShopifyCollectionDuplicateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The collection was not found. Please check the collection ID and try again.
     */
    const COLLECTION_NOT_FOUND = "COLLECTION_NOT_FOUND";
    /**
     * The collection title must not be blank.
     */
    const BLANK = "BLANK";
    /**
     * The collection title or URL handle is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The URL handle generated from the new title is already in use. Please choose a different title.
     */
    const TAKEN = "TAKEN";
    /**
     * The duplicated collection isn't valid.
     */
    const INVALID = "INVALID";
    /**
     * The shop has reached its limit of collections with sub-collection inclusions.
     */
    const TOO_MANY_SUB_COLLECTION_INCLUSION_COLLECTIONS = "TOO_MANY_SUB_COLLECTION_INCLUSION_COLLECTIONS";
    /**
     * The shop has reached its limit of collections with sub-collection exclusions.
     */
    const TOO_MANY_SUB_COLLECTION_EXCLUSION_COLLECTIONS = "TOO_MANY_SUB_COLLECTION_EXCLUSION_COLLECTIONS";
    /**
     * The shop has reached its limit of collection sources with conditions.
     */
    const TOO_MANY_CONDITION_BACKED_SOURCES = "TOO_MANY_CONDITION_BACKED_SOURCES";
}
