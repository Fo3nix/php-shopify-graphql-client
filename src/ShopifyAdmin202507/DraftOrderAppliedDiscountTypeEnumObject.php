<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DraftOrderAppliedDiscountTypeEnumObject extends EnumObject
{
    const FIXED_AMOUNT = "FIXED_AMOUNT";
    const PERCENTAGE = "PERCENTAGE";
}
