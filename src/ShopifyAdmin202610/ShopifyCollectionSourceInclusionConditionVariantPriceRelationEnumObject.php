<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing variant prices.
 */
class ShopifyCollectionSourceInclusionConditionVariantPriceRelationEnumObject extends EnumObject
{
    /**
     * The variant price equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The variant price does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The variant price is greater than the specified value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The variant price is less than the specified value.
     */
    const LESS_THAN = "LESS_THAN";
}
