<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The application level for a market condition.
 */
class ShopifyMarketConditionApplicationTypeEnumObject extends EnumObject
{
    /**
     * The condition matches specified records of a given type.
     */
    const SPECIFIED = "SPECIFIED";
    /**
     * The condition matches all records of a given type.
     */
    const ALL = "ALL";
}
