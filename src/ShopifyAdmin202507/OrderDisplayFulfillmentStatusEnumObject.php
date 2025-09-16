<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderDisplayFulfillmentStatusEnumObject extends EnumObject
{
    const UNFULFILLED = "UNFULFILLED";
    const PARTIALLY_FULFILLED = "PARTIALLY_FULFILLED";
    const FULFILLED = "FULFILLED";
    const RESTOCKED = "RESTOCKED";
    const PENDING_FULFILLMENT = "PENDING_FULFILLMENT";
    const OPEN = "OPEN";
    const IN_PROGRESS = "IN_PROGRESS";
    const ON_HOLD = "ON_HOLD";
    const SCHEDULED = "SCHEDULED";
    const REQUEST_DECLINED = "REQUEST_DECLINED";
}
