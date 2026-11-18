<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The method by which the discount's value is allocated onto its entitled lines.
 */
class ShopifyDiscountApplicationAllocationMethodEnumObject extends EnumObject
{
    /**
     * The value is spread across all entitled lines.
     */
    const ACROSS = "ACROSS";
    /**
     * The value is applied onto every entitled line.
     */
    const EACH = "EACH";
}
