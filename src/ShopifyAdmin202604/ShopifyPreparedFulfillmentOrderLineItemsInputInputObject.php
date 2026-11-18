<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to include the line items of a specified fulfillment order that should be marked as prepared for pickup by a customer.
 */
class ShopifyPreparedFulfillmentOrderLineItemsInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentOrderId"];

    protected $fulfillmentOrderId;

    /**
     * The ID of the fulfillment order.
     */
    public function setFulfillmentOrderId($fulfillmentOrderId): static
    {
        $this->fulfillmentOrderId = $fulfillmentOrderId;

        return $this;
    }
}
