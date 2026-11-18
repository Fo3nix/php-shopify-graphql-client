<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The relationship between the metaobject value and the condition values.
 */
class ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListRelationEnumObject extends EnumObject
{
    /**
     * Matches if the supplied metaobject value is equal to one or more of the values in the metafield's metaobject list.
     */
    const INCLUDES = "INCLUDES";
}
