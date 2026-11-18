<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderMoveFulfillmentOrderMoveUserError`.
 */
class ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Cannot move a fulfillment order that has progress reported.
     */
    const CANNOT_MOVE_FULFILLMENT_ORDER_WITH_REPORTED_PROGRESS = "CANNOT_MOVE_FULFILLMENT_ORDER_WITH_REPORTED_PROGRESS";
}
