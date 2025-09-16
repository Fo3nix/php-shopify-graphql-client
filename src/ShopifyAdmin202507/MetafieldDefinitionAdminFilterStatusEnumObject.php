<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldDefinitionAdminFilterStatusEnumObject extends EnumObject
{
    const NOT_FILTERABLE = "NOT_FILTERABLE";
    const IN_PROGRESS = "IN_PROGRESS";
    const FILTERABLE = "FILTERABLE";
    const FAILED = "FAILED";
}
