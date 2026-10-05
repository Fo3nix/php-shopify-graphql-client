<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCountPrecisionEnumObject extends EnumObject
{
    const EXACT = "EXACT";
    const AT_LEAST = "AT_LEAST";
}
