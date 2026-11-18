<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing product types in exclusion conditions.
 */
class ShopifyCollectionSourceExclusionConditionProductTypeRelationEnumObject extends EnumObject
{
    /**
     * The product type equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The product type contains the specified value.
     */
    const CONTAINS = "CONTAINS";
}
