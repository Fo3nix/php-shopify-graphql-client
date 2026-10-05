<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDiscountClassEnumObject extends EnumObject
{
    const PRODUCT = "PRODUCT";
    const ORDER = "ORDER";
    const SHIPPING = "SHIPPING";
}
