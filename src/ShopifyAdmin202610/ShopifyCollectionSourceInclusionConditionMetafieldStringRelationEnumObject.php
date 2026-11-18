<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relationship between the metafield value and the condition values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldStringRelationEnumObject extends EnumObject
{
    /**
     * The metafield value equals the specified value.
     */
    const EQUALS = "EQUALS";
}
