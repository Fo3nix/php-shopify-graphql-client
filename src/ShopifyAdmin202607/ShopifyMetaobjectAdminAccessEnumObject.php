<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetaobjectAdminAccessEnumObject extends EnumObject
{
    const MERCHANT_READ = "MERCHANT_READ";
    const MERCHANT_READ_WRITE = "MERCHANT_READ_WRITE";
    const PUBLIC_READ_WRITE = "PUBLIC_READ_WRITE";
}
