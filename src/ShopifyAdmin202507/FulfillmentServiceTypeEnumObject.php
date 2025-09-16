<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FulfillmentServiceTypeEnumObject extends EnumObject
{
    const GIFT_CARD = "GIFT_CARD";
    const MANUAL = "MANUAL";
    const THIRD_PARTY = "THIRD_PARTY";
}
