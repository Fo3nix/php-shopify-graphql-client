<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing variant weights.
 */
class ShopifyCollectionSourceInclusionConditionVariantWeightRelationEnumObject extends EnumObject
{
    /**
     * The variant weight equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The variant weight does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The variant weight is greater than the specified value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The variant weight is less than the specified value.
     */
    const LESS_THAN = "LESS_THAN";
}
