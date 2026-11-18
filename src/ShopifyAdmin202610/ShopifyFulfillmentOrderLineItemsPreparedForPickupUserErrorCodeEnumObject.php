<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentOrderLineItemsPreparedForPickupUserError`.
 */
class ShopifyFulfillmentOrderLineItemsPreparedForPickupUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The fulfillment order does not have any line items that can be prepared.
     */
    const NO_LINE_ITEMS_TO_PREPARE_FOR_FULFILLMENT_ORDER = "NO_LINE_ITEMS_TO_PREPARE_FOR_FULFILLMENT_ORDER";
    /**
     * Invalid fulfillment order ID provided.
     */
    const FULFILLMENT_ORDER_INVALID = "FULFILLMENT_ORDER_INVALID";
    /**
     * Unable to prepare quantity.
     */
    const UNABLE_TO_PREPARE_QUANTITY = "UNABLE_TO_PREPARE_QUANTITY";
}
