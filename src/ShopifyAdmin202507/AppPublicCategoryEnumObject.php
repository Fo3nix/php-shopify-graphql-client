<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AppPublicCategoryEnumObject extends EnumObject
{
    const PRIVATE = "PRIVATE";
    const PUBLIC = "PUBLIC";
    const CUSTOM = "CUSTOM";
    const OTHER = "OTHER";
}
