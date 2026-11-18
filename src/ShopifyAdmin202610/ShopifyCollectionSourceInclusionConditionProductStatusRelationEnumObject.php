<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relation for comparing product status.
 */
class ShopifyCollectionSourceInclusionConditionProductStatusRelationEnumObject extends EnumObject
{
    /**
     * The product status equals the specified value.
     */
    const EQUALS = "EQUALS";
    /**
     * The product status does not equal the specified value.
     */
    const NOT_EQUALS = "NOT_EQUALS";
}
