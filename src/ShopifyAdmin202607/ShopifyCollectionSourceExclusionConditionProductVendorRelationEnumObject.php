<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing product vendors in exclusion conditions.
 */
class ShopifyCollectionSourceExclusionConditionProductVendorRelationEnumObject extends EnumObject
{
    /**
     * The product vendor equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The product vendor contains the specified value.
     */
    const CONTAINS = "CONTAINS";
}
