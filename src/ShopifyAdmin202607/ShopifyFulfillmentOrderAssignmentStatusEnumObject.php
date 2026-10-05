<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyFulfillmentOrderAssignmentStatusEnumObject extends EnumObject
{
    const CANCELLATION_REQUESTED = "CANCELLATION_REQUESTED";
    const FULFILLMENT_REQUESTED = "FULFILLMENT_REQUESTED";
    const FULFILLMENT_ACCEPTED = "FULFILLMENT_ACCEPTED";
    const FULFILLMENT_UNSUBMITTED = "FULFILLMENT_UNSUBMITTED";
}
