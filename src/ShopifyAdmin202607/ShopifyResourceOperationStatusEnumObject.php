<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyResourceOperationStatusEnumObject extends EnumObject
{
    const CREATED = "CREATED";
    const ACTIVE = "ACTIVE";
    const COMPLETE = "COMPLETE";
}
