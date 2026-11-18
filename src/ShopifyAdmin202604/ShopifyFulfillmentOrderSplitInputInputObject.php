<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the split applied to the fulfillment order.
 */
class ShopifyFulfillmentOrderSplitInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentOrderLineItems", "fulfillmentOrderId"];

    protected $fulfillmentOrderLineItems;
    protected $fulfillmentOrderId;

    /**
     * The fulfillment order line items to be split out.
     */
    public function setFulfillmentOrderLineItems(array $fulfillmentOrderLineItems): static
    {
        $this->fulfillmentOrderLineItems = $fulfillmentOrderLineItems;

        return $this;
    }

    /**
     * The ID of the fulfillment order to be split.
     */
    public function setFulfillmentOrderId($fulfillmentOrderId): static
    {
        $this->fulfillmentOrderId = $fulfillmentOrderId;

        return $this;
    }
}
