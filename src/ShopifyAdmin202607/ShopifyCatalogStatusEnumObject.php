<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCatalogStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const ARCHIVED = "ARCHIVED";
    const DRAFT = "DRAFT";
}
