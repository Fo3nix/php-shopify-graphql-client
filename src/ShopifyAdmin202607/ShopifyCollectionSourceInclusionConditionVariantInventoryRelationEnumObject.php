<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing variant inventory quantities.
 */
class ShopifyCollectionSourceInclusionConditionVariantInventoryRelationEnumObject extends EnumObject
{
    /**
     * The variant inventory equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The variant inventory is greater than the specified value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The variant inventory is less than the specified value.
     */
    const LESS_THAN = "LESS_THAN";
}
