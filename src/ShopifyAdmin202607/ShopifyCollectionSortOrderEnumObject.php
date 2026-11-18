<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the sort order for the products in the collection.
 */
class ShopifyCollectionSortOrderEnumObject extends EnumObject
{
    /**
     * Alphabetically, in ascending order (A - Z).
     */
    const ALPHA_ASC = "ALPHA_ASC";
    /**
     * Alphabetically, in descending order (Z - A).
     */
    const ALPHA_DESC = "ALPHA_DESC";
    /**
     * By best-selling products.
     */
    const BEST_SELLING = "BEST_SELLING";
    /**
     * By most relevant products.
     */
    const MOST_RELEVANT = "MOST_RELEVANT";
    /**
     * By date created, in ascending order (oldest - newest).
     */
    const CREATED = "CREATED";
    /**
     * By date created, in descending order (newest - oldest).
     */
    const CREATED_DESC = "CREATED_DESC";
    /**
     * In the order set manually by the merchant.
     */
    const MANUAL = "MANUAL";
    /**
     * By price, in ascending order (lowest - highest).
     */
    const PRICE_ASC = "PRICE_ASC";
    /**
     * By price, in descending order (highest - lowest).
     */
    const PRICE_DESC = "PRICE_DESC";
}
