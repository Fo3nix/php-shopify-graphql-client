<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldAdminAccessEnumObject extends EnumObject
{
    const PRIVATE = "PRIVATE";
    const PUBLIC_READ = "PUBLIC_READ";
    const PUBLIC_READ_WRITE = "PUBLIC_READ_WRITE";
    const MERCHANT_READ = "MERCHANT_READ";
    const MERCHANT_READ_WRITE = "MERCHANT_READ_WRITE";
}
