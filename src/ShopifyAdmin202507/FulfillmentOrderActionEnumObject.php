<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FulfillmentOrderActionEnumObject extends EnumObject
{
    const CREATE_FULFILLMENT = "CREATE_FULFILLMENT";
    const REQUEST_FULFILLMENT = "REQUEST_FULFILLMENT";
    const CANCEL_FULFILLMENT_ORDER = "CANCEL_FULFILLMENT_ORDER";
    const MOVE = "MOVE";
    const REQUEST_CANCELLATION = "REQUEST_CANCELLATION";
    const MARK_AS_OPEN = "MARK_AS_OPEN";
    const RELEASE_HOLD = "RELEASE_HOLD";
    const HOLD = "HOLD";
    const EXTERNAL = "EXTERNAL";
    const SPLIT = "SPLIT";
    const MERGE = "MERGE";
}
