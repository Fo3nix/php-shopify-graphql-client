<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMediaStatusEnumObject extends EnumObject
{
    const UPLOADED = "UPLOADED";
    const PROCESSING = "PROCESSING";
    const READY = "READY";
    const FAILED = "FAILED";
}
