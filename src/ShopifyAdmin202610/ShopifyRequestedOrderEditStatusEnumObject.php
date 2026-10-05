<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyRequestedOrderEditStatusEnumObject extends EnumObject
{
    const REQUESTED = "REQUESTED";
    const RESOLVED = "RESOLVED";
    const DECLINED = "DECLINED";
}
