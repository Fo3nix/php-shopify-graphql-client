<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to include the line items of a specified fulfillment order that should be fulfilled.
 */
class ShopifyFulfillmentOrderLineItemsInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentOrderId"];

    protected $fulfillmentOrderId;
    protected $fulfillmentOrderLineItems;

    /**
     * The ID of the fulfillment order.
     */
    public function setFulfillmentOrderId($fulfillmentOrderId): static
    {
        $this->fulfillmentOrderId = $fulfillmentOrderId;

        return $this;
    }

    /**
     * The fulfillment order line items to be fulfilled.
     * If left blank, all line items of the fulfillment order will be fulfilled.
     * Accepts a maximum of 512 line items.
     */
    public function setFulfillmentOrderLineItems(array $fulfillmentOrderLineItems): static
    {
        $this->fulfillmentOrderLineItems = $fulfillmentOrderLineItems;

        return $this;
    }
}
