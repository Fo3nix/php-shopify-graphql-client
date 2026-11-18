<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing product categories in exclusion conditions.
 */
class ShopifyCollectionSourceExclusionConditionProductCategoryRelationEnumObject extends EnumObject
{
    /**
     * The product category equals the specified value.
     */
    const EQUALS = "EQUALS";
}
