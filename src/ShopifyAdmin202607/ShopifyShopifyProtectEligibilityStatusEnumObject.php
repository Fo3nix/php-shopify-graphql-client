<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopifyProtectEligibilityStatusEnumObject extends EnumObject
{
    const PENDING = "PENDING";
    const ELIGIBLE = "ELIGIBLE";
    const NOT_ELIGIBLE = "NOT_ELIGIBLE";
}
