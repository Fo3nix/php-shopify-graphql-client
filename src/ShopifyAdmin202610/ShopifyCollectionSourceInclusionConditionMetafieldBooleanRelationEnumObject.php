<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing boolean metafield values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldBooleanRelationEnumObject extends EnumObject
{
    /**
     * The metafield value equals the condition value.
     */
    const EQUALS = "EQUALS";
}
