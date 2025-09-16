<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerProductSubscriberStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const CANCELLED = "CANCELLED";
    const EXPIRED = "EXPIRED";
    const FAILED = "FAILED";
    const NEVER_SUBSCRIBED = "NEVER_SUBSCRIBED";
    const PAUSED = "PAUSED";
}
