<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetafieldDefinitionAdminFilterStatusEnumObject extends EnumObject
{
    const NOT_FILTERABLE = "NOT_FILTERABLE";
    const IN_PROGRESS = "IN_PROGRESS";
    const FILTERABLE = "FILTERABLE";
    const FAILED = "FAILED";
}
