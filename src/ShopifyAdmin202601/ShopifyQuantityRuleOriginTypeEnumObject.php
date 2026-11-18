<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The origin of quantity rule on a price list.
 */
class ShopifyQuantityRuleOriginTypeEnumObject extends EnumObject
{
    /**
     * Quantity rule is explicitly defined.
     */
    const FIXED = "FIXED";
    /**
     * Quantity rule falls back to the relative rule.
     */
    const RELATIVE = "RELATIVE";
}
