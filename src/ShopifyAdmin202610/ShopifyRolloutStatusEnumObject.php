<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyRolloutStatusEnumObject extends EnumObject
{
    const DRAFT = "DRAFT";
    const SCHEDULED = "SCHEDULED";
    const PAUSED = "PAUSED";
    const ACTIVE = "ACTIVE";
    const CONCLUDED = "CONCLUDED";
    const ARCHIVED = "ARCHIVED";
}
