<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for merging fulfillment orders into a single merged fulfillment order.
 */
class ShopifyFulfillmentOrderMergeInputMergeIntentInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentOrderId"];

    protected $fulfillmentOrderLineItems;
    protected $fulfillmentOrderId;

    /**
     * The fulfillment order line items to be merged.
     */
    public function setFulfillmentOrderLineItems(array $fulfillmentOrderLineItems): static
    {
        $this->fulfillmentOrderLineItems = $fulfillmentOrderLineItems;

        return $this;
    }

    /**
     * The ID of the fulfillment order to be merged.
     */
    public function setFulfillmentOrderId($fulfillmentOrderId): static
    {
        $this->fulfillmentOrderId = $fulfillmentOrderId;

        return $this;
    }
}
