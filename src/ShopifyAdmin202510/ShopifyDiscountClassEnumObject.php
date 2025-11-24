<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDiscountClassEnumObject extends EnumObject
{
    const PRODUCT = "PRODUCT";
    const ORDER = "ORDER";
    const SHIPPING = "SHIPPING";
}
