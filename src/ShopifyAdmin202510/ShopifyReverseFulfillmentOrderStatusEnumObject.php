<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyReverseFulfillmentOrderStatusEnumObject extends EnumObject
{
    const CANCELED = "CANCELED";
    const CLOSED = "CLOSED";
    const OPEN = "OPEN";
}
