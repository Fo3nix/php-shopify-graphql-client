<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MarketingActivityStatusBadgeTypeEnumObject extends EnumObject
{
    const DEFAULT = "DEFAULT";
    const SUCCESS = "SUCCESS";
    const ATTENTION = "ATTENTION";
    const WARNING = "WARNING";
    const INFO = "INFO";
    const CRITICAL = "CRITICAL";
}
