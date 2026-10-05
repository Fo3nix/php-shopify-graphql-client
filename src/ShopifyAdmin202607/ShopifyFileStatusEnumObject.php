<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyFileStatusEnumObject extends EnumObject
{
    const UPLOADED = "UPLOADED";
    const PROCESSING = "PROCESSING";
    const READY = "READY";
    const FAILED = "FAILED";
}
