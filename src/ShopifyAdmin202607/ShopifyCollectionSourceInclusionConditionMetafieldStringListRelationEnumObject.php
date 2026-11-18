<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relationship between the metafield value and the condition values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldStringListRelationEnumObject extends EnumObject
{
    /**
     * The metafield value includes the specified value.
     */
    const INCLUDES = "INCLUDES";
}
