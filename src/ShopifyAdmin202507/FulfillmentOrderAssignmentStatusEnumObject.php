<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FulfillmentOrderAssignmentStatusEnumObject extends EnumObject
{
    const CANCELLATION_REQUESTED = "CANCELLATION_REQUESTED";
    const FULFILLMENT_REQUESTED = "FULFILLMENT_REQUESTED";
    const FULFILLMENT_ACCEPTED = "FULFILLMENT_ACCEPTED";
    const FULFILLMENT_UNSUBMITTED = "FULFILLMENT_UNSUBMITTED";
}
