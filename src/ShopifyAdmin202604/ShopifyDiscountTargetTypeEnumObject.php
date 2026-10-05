<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDiscountTargetTypeEnumObject extends EnumObject
{
    const LINE_ITEM = "LINE_ITEM";
    const SHIPPING_LINE = "SHIPPING_LINE";
}
