<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyOrderDisplayRequestedEditStatusEnumObject extends EnumObject
{
    const NONE = "NONE";
    const REQUESTED = "REQUESTED";
    const RESOLVED = "RESOLVED";
    const DECLINED = "DECLINED";
}
