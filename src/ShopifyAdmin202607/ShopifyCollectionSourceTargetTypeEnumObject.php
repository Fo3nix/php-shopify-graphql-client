<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Conditions that target variants cause either the entire product to be included when satisfied or only the matching variants.
 */
class ShopifyCollectionSourceTargetTypeEnumObject extends EnumObject
{
    /**
     * The entire product is included if any variant satisfies the conditions.
     */
    const PRODUCTS = "PRODUCTS";
    /**
     * Individual variants are included if they satisfy the conditions.
     */
    const VARIANTS = "VARIANTS";
}
