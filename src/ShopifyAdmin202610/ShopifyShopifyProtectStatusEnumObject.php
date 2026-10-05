<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopifyProtectStatusEnumObject extends EnumObject
{
    const PENDING = "PENDING";
    const ACTIVE = "ACTIVE";
    const INACTIVE = "INACTIVE";
    const PROTECTED = "PROTECTED";
    const NOT_PROTECTED = "NOT_PROTECTED";
}
