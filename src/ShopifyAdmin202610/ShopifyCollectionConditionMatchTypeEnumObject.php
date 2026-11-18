<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies whether products must match any or all conditions to be included in the collection.
 */
class ShopifyCollectionConditionMatchTypeEnumObject extends EnumObject
{
    /**
     * Products match if they satisfy one or more of the conditions.
     */
    const ANY = "ANY";
    /**
     * Products match only if they satisfy all of the conditions.
     */
    const ALL = "ALL";
}
