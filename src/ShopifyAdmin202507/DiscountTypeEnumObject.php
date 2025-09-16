<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DiscountTypeEnumObject extends EnumObject
{
    const MANUAL = "MANUAL";
    const CODE_DISCOUNT = "CODE_DISCOUNT";
    const AUTOMATIC_DISCOUNT = "AUTOMATIC_DISCOUNT";
}
