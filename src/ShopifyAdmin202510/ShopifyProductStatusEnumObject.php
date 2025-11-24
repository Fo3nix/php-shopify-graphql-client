<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyProductStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const ARCHIVED = "ARCHIVED";
    const DRAFT = "DRAFT";
    const UNLISTED = "UNLISTED";
}
