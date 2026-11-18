<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing variant titles.
 */
class ShopifyCollectionSourceInclusionConditionVariantTitleRelationEnumObject extends EnumObject
{
    /**
     * The variant title equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The variant title does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The variant title starts with the specified value.
     */
    const STARTS_WITH = "STARTS_WITH";
    /**
     * The variant title ends with the specified value.
     */
    const ENDS_WITH = "ENDS_WITH";
    /**
     * The variant title contains the specified value.
     */
    const CONTAINS = "CONTAINS";
    /**
     * The variant title does not contain the specified value.
     */
    const DOES_NOT_CONTAIN = "DOES_NOT_CONTAIN";
}
