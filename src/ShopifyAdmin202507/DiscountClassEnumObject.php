<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DiscountClassEnumObject extends EnumObject
{
    const PRODUCT = "PRODUCT";
    const ORDER = "ORDER";
    const SHIPPING = "SHIPPING";
}
