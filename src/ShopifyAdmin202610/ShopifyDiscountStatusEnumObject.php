<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDiscountStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const EXPIRED = "EXPIRED";
    const SCHEDULED = "SCHEDULED";
}
