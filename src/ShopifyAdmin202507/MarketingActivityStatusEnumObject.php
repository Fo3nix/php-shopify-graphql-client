<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MarketingActivityStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const DELETED = "DELETED";
    const DELETED_EXTERNALLY = "DELETED_EXTERNALLY";
    const DISCONNECTED = "DISCONNECTED";
    const DRAFT = "DRAFT";
    const FAILED = "FAILED";
    const INACTIVE = "INACTIVE";
    const PAUSED = "PAUSED";
    const PENDING = "PENDING";
    const SCHEDULED = "SCHEDULED";
    const UNDEFINED = "UNDEFINED";
}
