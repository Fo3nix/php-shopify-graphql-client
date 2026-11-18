<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing variant compare at prices.
 */
class ShopifyCollectionSourceInclusionConditionVariantCompareAtPriceRelationEnumObject extends EnumObject
{
    /**
     * The variant compare at price equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The variant compare at price does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The variant compare at price is greater than the specified value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The variant compare at price is less than the specified value.
     */
    const LESS_THAN = "LESS_THAN";
    /**
     * The variant has a compare at price set (indicating a price reduction).
     */
    const IS_SET = "IS_SET";
    /**
     * The variant does not have a compare at price set.
     */
    const IS_NOT_SET = "IS_NOT_SET";
}
