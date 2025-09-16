<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyProtectStatusEnumObject extends EnumObject
{
    const PENDING = "PENDING";
    const ACTIVE = "ACTIVE";
    const INACTIVE = "INACTIVE";
    const PROTECTED = "PROTECTED";
    const NOT_PROTECTED = "NOT_PROTECTED";
}
