<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing integer metafield values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldIntegerRelationEnumObject extends EnumObject
{
    /**
     * The metafield value equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The metafield value is greater than the specified value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The metafield value is less than the specified value.
     */
    const LESS_THAN = "LESS_THAN";
}
