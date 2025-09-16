<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ResourceOperationStatusEnumObject extends EnumObject
{
    const CREATED = "CREATED";
    const ACTIVE = "ACTIVE";
    const COMPLETE = "COMPLETE";
}
