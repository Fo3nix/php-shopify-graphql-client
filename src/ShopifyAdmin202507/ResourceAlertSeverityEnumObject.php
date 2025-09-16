<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ResourceAlertSeverityEnumObject extends EnumObject
{
    const DEFAULT = "DEFAULT";
    const INFO = "INFO";
    const WARNING = "WARNING";
    const SUCCESS = "SUCCESS";
    const CRITICAL = "CRITICAL";
}
