<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DiscountStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const EXPIRED = "EXPIRED";
    const SCHEDULED = "SCHEDULED";
}
