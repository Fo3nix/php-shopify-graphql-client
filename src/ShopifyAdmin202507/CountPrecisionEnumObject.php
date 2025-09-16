<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CountPrecisionEnumObject extends EnumObject
{
    const EXACT = "EXACT";
    const AT_LEAST = "AT_LEAST";
}
