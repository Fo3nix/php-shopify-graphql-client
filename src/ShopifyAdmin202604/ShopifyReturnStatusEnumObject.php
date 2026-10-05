<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyReturnStatusEnumObject extends EnumObject
{
    const CANCELED = "CANCELED";
    const CLOSED = "CLOSED";
    const OPEN = "OPEN";
    const REQUESTED = "REQUESTED";
    const DECLINED = "DECLINED";
}
