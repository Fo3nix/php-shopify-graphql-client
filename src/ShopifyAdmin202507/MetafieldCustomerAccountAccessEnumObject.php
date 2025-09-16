<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldCustomerAccountAccessEnumObject extends EnumObject
{
    const READ_WRITE = "READ_WRITE";
    const READ = "READ";
    const NONE = "NONE";
}
