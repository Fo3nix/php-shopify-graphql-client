<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relationship between the product tag and the condition values.
 */
class ShopifyCollectionSourceInclusionConditionProductTagRelationEnumObject extends EnumObject
{
    /**
     * The product is tagged with the specified value.
     */
    const TAGGED_WITH = "TAGGED_WITH";
    /**
     * The product is not tagged with the specified value.
     */
    const NOT_TAGGED_WITH = "NOT_TAGGED_WITH";
}
