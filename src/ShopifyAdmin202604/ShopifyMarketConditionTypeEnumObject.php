<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The condition types for the condition set.
 */
class ShopifyMarketConditionTypeEnumObject extends EnumObject
{
    /**
     * The condition checks the visitor's region.
     */
    const REGION = "REGION";
    /**
     * The condition checks the location that the visitor is shopping from.
     */
    const LOCATION = "LOCATION";
    /**
     * The condition checks the company location that the visitor is purchasing for.
     */
    const COMPANY_LOCATION = "COMPANY_LOCATION";
}
