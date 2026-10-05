<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyAppSubscriptionStatusEnumObject extends EnumObject
{
    const PENDING = "PENDING";
    const ACTIVE = "ACTIVE";
    const DECLINED = "DECLINED";
    const EXPIRED = "EXPIRED";
    const FROZEN = "FROZEN";
    const CANCELLED = "CANCELLED";
}
