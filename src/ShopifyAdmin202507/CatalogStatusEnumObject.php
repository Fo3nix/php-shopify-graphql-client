<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CatalogStatusEnumObject extends EnumObject
{
    const ACTIVE = "ACTIVE";
    const ARCHIVED = "ARCHIVED";
    const DRAFT = "DRAFT";
}
