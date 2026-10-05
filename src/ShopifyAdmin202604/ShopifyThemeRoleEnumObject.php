<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyThemeRoleEnumObject extends EnumObject
{
    const MAIN = "MAIN";
    const UNPUBLISHED = "UNPUBLISHED";
    const DEMO = "DEMO";
    const DEVELOPMENT = "DEVELOPMENT";
    const ARCHIVED = "ARCHIVED";
    const LOCKED = "LOCKED";
}
