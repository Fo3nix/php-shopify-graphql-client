<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The method by which the price rule's value is allocated to its entitled items.
 */
class ShopifyPriceRuleAllocationMethodEnumObject extends EnumObject
{
    /**
     * The value will be applied to each of the entitled items.
     */
    const EACH = "EACH";
    /**
     * The value will be applied once across the entitled items.
     */
    const ACROSS = "ACROSS";
}
