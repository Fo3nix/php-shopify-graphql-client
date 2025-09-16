<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SubscriptionContractSubscriptionStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const PAUSED = "PAUSED";
    const CANCELLED = "CANCELLED";
    const EXPIRED = "EXPIRED";
    const FAILED = "FAILED";
}
