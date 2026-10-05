<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDiscountApplicationTargetTypeEnumObject extends EnumObject
{
    const LINE_ITEM = "LINE_ITEM";
    const SHIPPING_LINE = "SHIPPING_LINE";
}
