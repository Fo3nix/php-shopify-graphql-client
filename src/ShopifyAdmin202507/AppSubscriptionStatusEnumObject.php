<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AppSubscriptionStatusEnumObject extends EnumObject
{
    const PENDING = "PENDING";
    const ACTIVE = "ACTIVE";
    const DECLINED = "DECLINED";
    const EXPIRED = "EXPIRED";
    const FROZEN = "FROZEN";
    const CANCELLED = "CANCELLED";
}
