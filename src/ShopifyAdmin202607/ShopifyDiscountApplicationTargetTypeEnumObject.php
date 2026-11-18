<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of line (i.e. line item or shipping line) on an order that the discount is applicable towards.
 */
class ShopifyDiscountApplicationTargetTypeEnumObject extends EnumObject
{
    /**
     * The discount applies onto line items.
     */
    const LINE_ITEM = "LINE_ITEM";
    /**
     * The discount applies onto shipping lines.
     */
    const SHIPPING_LINE = "SHIPPING_LINE";
}
