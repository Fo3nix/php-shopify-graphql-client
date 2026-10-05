<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifySubscriptionContractSubscriptionStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const PAUSED = "PAUSED";
    const CANCELLED = "CANCELLED";
    const EXPIRED = "EXPIRED";
    const FAILED = "FAILED";
}
