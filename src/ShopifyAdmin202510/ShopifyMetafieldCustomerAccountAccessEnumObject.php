<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetafieldCustomerAccountAccessEnumObject extends EnumObject
{
    const READ_WRITE = "READ_WRITE";
    const READ = "READ";
    const NONE = "NONE";
}
