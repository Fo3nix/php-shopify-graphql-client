<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyFulfillmentEventStatusEnumObject extends EnumObject
{
    const LABEL_PURCHASED = "LABEL_PURCHASED";
    const LABEL_PRINTED = "LABEL_PRINTED";
    const READY_FOR_PICKUP = "READY_FOR_PICKUP";
    const CONFIRMED = "CONFIRMED";
    const IN_TRANSIT = "IN_TRANSIT";
    const OUT_FOR_DELIVERY = "OUT_FOR_DELIVERY";
    const ATTEMPTED_DELIVERY = "ATTEMPTED_DELIVERY";
    const DELAYED = "DELAYED";
    const DELIVERED = "DELIVERED";
    const FAILURE = "FAILURE";
    const CARRIER_PICKED_UP = "CARRIER_PICKED_UP";
}
