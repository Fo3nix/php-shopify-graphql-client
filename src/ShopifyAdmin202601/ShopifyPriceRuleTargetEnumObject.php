<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of lines (line_item or shipping_line) to which the price rule applies.
 */
class ShopifyPriceRuleTargetEnumObject extends EnumObject
{
    /**
     * The price rule applies to line items.
     */
    const LINE_ITEM = "LINE_ITEM";
    /**
     * The price rule applies to shipping lines.
     */
    const SHIPPING_LINE = "SHIPPING_LINE";
}
