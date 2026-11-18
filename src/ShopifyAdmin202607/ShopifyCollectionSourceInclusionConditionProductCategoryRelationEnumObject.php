<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing product category IDs.
 */
class ShopifyCollectionSourceInclusionConditionProductCategoryRelationEnumObject extends EnumObject
{
    /**
     * The product category ID equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The product category ID does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
}
