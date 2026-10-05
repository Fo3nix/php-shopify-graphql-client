<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetafieldCustomerAccountAccessEnumObject extends EnumObject
{
    const READ_WRITE = "READ_WRITE";
    const READ = "READ";
    const NONE = "NONE";
}
