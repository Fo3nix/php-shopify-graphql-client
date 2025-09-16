<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ReturnStatusEnumObject extends EnumObject
{
    const CANCELED = "CANCELED";
    const CLOSED = "CLOSED";
    const OPEN = "OPEN";
    const REQUESTED = "REQUESTED";
    const DECLINED = "DECLINED";
}
