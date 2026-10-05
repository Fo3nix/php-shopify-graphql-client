<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDiscountTypeEnumObject extends EnumObject
{
    const MANUAL = "MANUAL";
    const CODE_DISCOUNT = "CODE_DISCOUNT";
    const AUTOMATIC_DISCOUNT = "AUTOMATIC_DISCOUNT";
}
