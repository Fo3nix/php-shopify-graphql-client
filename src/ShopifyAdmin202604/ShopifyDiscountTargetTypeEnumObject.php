<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of line (line item or shipping line) on an order that the subscription discount is applicable towards.
 */
class ShopifyDiscountTargetTypeEnumObject extends EnumObject
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
