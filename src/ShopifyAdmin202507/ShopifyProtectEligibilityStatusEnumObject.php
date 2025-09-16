<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyProtectEligibilityStatusEnumObject extends EnumObject
{
    const PENDING = "PENDING";
    const ELIGIBLE = "ELIGIBLE";
    const NOT_ELIGIBLE = "NOT_ELIGIBLE";
}
