<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AppPurchaseStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const DECLINED = "DECLINED";
    const EXPIRED = "EXPIRED";
    const PENDING = "PENDING";
}
