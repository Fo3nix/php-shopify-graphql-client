<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyFulfillmentOrderRequestStatusEnumObject extends EnumObject
{
    const UNSUBMITTED = "UNSUBMITTED";
    const SUBMITTED = "SUBMITTED";
    const ACCEPTED = "ACCEPTED";
    const REJECTED = "REJECTED";
    const CANCELLATION_REQUESTED = "CANCELLATION_REQUESTED";
    const CANCELLATION_ACCEPTED = "CANCELLATION_ACCEPTED";
    const CANCELLATION_REJECTED = "CANCELLATION_REJECTED";
    const CLOSED = "CLOSED";
}
