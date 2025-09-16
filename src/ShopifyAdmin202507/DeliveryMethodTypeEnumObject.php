<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DeliveryMethodTypeEnumObject extends EnumObject
{
    const SHIPPING = "SHIPPING";
    const PICK_UP = "PICK_UP";
    const NONE = "NONE";
    const RETAIL = "RETAIL";
    const LOCAL = "LOCAL";
    const PICKUP_POINT = "PICKUP_POINT";
}
