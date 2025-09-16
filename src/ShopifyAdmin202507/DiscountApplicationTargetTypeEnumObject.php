<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DiscountApplicationTargetTypeEnumObject extends EnumObject
{
    const LINE_ITEM = "LINE_ITEM";
    const SHIPPING_LINE = "SHIPPING_LINE";
}
