<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FulfillmentDisplayStatusEnumObject extends EnumObject
{
    const ATTEMPTED_DELIVERY = "ATTEMPTED_DELIVERY";
    const CANCELED = "CANCELED";
    const CONFIRMED = "CONFIRMED";
    const DELAYED = "DELAYED";
    const DELIVERED = "DELIVERED";
    const FAILURE = "FAILURE";
    const FULFILLED = "FULFILLED";
    const IN_TRANSIT = "IN_TRANSIT";
    const LABEL_PRINTED = "LABEL_PRINTED";
    const LABEL_PURCHASED = "LABEL_PURCHASED";
    const LABEL_VOIDED = "LABEL_VOIDED";
    const MARKED_AS_FULFILLED = "MARKED_AS_FULFILLED";
    const NOT_DELIVERED = "NOT_DELIVERED";
    const OUT_FOR_DELIVERY = "OUT_FOR_DELIVERY";
    const READY_FOR_PICKUP = "READY_FOR_PICKUP";
    const PICKED_UP = "PICKED_UP";
    const SUBMITTED = "SUBMITTED";
}
