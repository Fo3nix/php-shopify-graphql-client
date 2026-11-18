<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to calculate the financial outcome of a requested order edit.
 */
class ShopifyCalculateRequestedOrderEditInputInputObject extends InputObject
{
    const REQUIRED = ["orderId", "lineItems"];

    protected $orderId;
    protected $lineItems;

    /**
     * The ID of the order to calculate the requested order edit for.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The line item changes from the order to include in the edit calculation, grouped by the type of change.
     */
    public function setLineItems(ShopifyCalculateRequestedOrderEditLineItemsInputInputObject $shopifyCalculateRequestedOrderEditLineItemsInputInputObject): static
    {
        $this->lineItems = $shopifyCalculateRequestedOrderEditLineItemsInputInputObject;

        return $this;
    }
}
