<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMarketingActivityStatusBadgeTypeEnumObject extends EnumObject
{
    const DEFAULT = "DEFAULT";
    const SUCCESS = "SUCCESS";
    const ATTENTION = "ATTENTION";
    const WARNING = "WARNING";
    const INFO = "INFO";
    const CRITICAL = "CRITICAL";
}
