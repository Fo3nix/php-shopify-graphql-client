<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ReverseFulfillmentOrderStatusEnumObject extends EnumObject
{
    const CANCELED = "CANCELED";
    const CLOSED = "CLOSED";
    const OPEN = "OPEN";
}
