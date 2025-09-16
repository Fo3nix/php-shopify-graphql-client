<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FulfillmentOrderStatusEnumObject extends EnumObject
{
    const OPEN = "OPEN";
    const IN_PROGRESS = "IN_PROGRESS";
    const CANCELLED = "CANCELLED";
    const INCOMPLETE = "INCOMPLETE";
    const CLOSED = "CLOSED";
    const SCHEDULED = "SCHEDULED";
    const ON_HOLD = "ON_HOLD";
}
