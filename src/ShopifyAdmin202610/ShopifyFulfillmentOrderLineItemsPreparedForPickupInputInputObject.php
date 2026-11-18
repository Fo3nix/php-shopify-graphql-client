<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for marking fulfillment order line items as ready for pickup.
 */
class ShopifyFulfillmentOrderLineItemsPreparedForPickupInputInputObject extends InputObject
{
    const REQUIRED = ["lineItemsByFulfillmentOrder"];

    protected $lineItemsByFulfillmentOrder;

    /**
     * The fulfillment orders associated with the line items which are ready to be picked up by a customer.
     */
    public function setLineItemsByFulfillmentOrder(array $lineItemsByFulfillmentOrder): static
    {
        $this->lineItemsByFulfillmentOrder = $lineItemsByFulfillmentOrder;

        return $this;
    }
}
