<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyFulfillmentServiceTypeEnumObject extends EnumObject
{
    const GIFT_CARD = "GIFT_CARD";
    const MANUAL = "MANUAL";
    const THIRD_PARTY = "THIRD_PARTY";
}
