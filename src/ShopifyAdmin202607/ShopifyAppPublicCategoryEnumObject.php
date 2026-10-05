<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyAppPublicCategoryEnumObject extends EnumObject
{
    const PRIVATE = "PRIVATE";
    const PUBLIC = "PUBLIC";
    const CUSTOM = "CUSTOM";
    const OTHER = "OTHER";
}
