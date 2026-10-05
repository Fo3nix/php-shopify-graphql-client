<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyResourceAlertSeverityEnumObject extends EnumObject
{
    const DEFAULT = "DEFAULT";
    const INFO = "INFO";
    const WARNING = "WARNING";
    const SUCCESS = "SUCCESS";
    const CRITICAL = "CRITICAL";
}
