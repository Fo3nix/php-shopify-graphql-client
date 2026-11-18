<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing product types.
 */
class ShopifyCollectionSourceInclusionConditionProductTypeRelationEnumObject extends EnumObject
{
    /**
     * The product type equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The product type does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The product type starts with the specified value.
     */
    const STARTS_WITH = "STARTS_WITH";
    /**
     * The product type ends with the specified value.
     */
    const ENDS_WITH = "ENDS_WITH";
    /**
     * The product type contains the specified value.
     */
    const CONTAINS = "CONTAINS";
    /**
     * The product type does not contain the specified value.
     */
    const DOES_NOT_CONTAIN = "DOES_NOT_CONTAIN";
}
