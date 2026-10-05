<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyAppPurchaseStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const DECLINED = "DECLINED";
    const EXPIRED = "EXPIRED";
    const PENDING = "PENDING";
}
