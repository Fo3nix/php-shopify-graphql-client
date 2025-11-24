<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetaobjectAdminAccessEnumObject extends EnumObject
{
    const PRIVATE = "PRIVATE";
    const MERCHANT_READ = "MERCHANT_READ";
    const MERCHANT_READ_WRITE = "MERCHANT_READ_WRITE";
    const PUBLIC_READ = "PUBLIC_READ";
    const PUBLIC_READ_WRITE = "PUBLIC_READ_WRITE";
}
