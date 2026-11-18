<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relationship between the product title and the condition values.
 */
class ShopifyCollectionSourceInclusionConditionProductTitleRelationEnumObject extends EnumObject
{
    /**
     * The product title equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The product title does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The product title contains the specified value.
     */
    const CONTAINS = "CONTAINS";
    /**
     * The product title does not contain the specified value.
     */
    const DOES_NOT_CONTAIN = "DOES_NOT_CONTAIN";
    /**
     * The product title starts with the specified value.
     */
    const STARTS_WITH = "STARTS_WITH";
    /**
     * The product title ends with the specified value.
     */
    const ENDS_WITH = "ENDS_WITH";
}
