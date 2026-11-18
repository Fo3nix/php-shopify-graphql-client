<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing product vendors.
 */
class ShopifyCollectionSourceInclusionConditionProductVendorRelationEnumObject extends EnumObject
{
    /**
     * The product vendor equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The product vendor does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The product vendor starts with the specified value.
     */
    const STARTS_WITH = "STARTS_WITH";
    /**
     * The product vendor ends with the specified value.
     */
    const ENDS_WITH = "ENDS_WITH";
    /**
     * The product vendor contains the specified value.
     */
    const CONTAINS = "CONTAINS";
    /**
     * The product vendor does not contain the specified value.
     */
    const DOES_NOT_CONTAIN = "DOES_NOT_CONTAIN";
}
