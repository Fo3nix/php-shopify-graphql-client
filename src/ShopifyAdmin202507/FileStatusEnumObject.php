<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FileStatusEnumObject extends EnumObject
{
    const UPLOADED = "UPLOADED";
    const PROCESSING = "PROCESSING";
    const READY = "READY";
    const FAILED = "FAILED";
}
