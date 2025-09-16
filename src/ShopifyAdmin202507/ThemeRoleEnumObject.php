<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ThemeRoleEnumObject extends EnumObject
{
    const MAIN = "MAIN";
    const UNPUBLISHED = "UNPUBLISHED";
    const DEMO = "DEMO";
    const DEVELOPMENT = "DEVELOPMENT";
    const ARCHIVED = "ARCHIVED";
    const LOCKED = "LOCKED";
}
